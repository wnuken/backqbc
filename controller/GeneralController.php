<?php
/*
* author: Brisan
* app: backQBC
*/

class General {
    var $exception = 'Caught exception: ';
    var $webService = QBC_SOAP_SERVER;
    var $options = array(
        'cache_wsdl'=> WSDL_CACHE_NONE
    );

    public function sell($params){

        $sell = QbcSciSellQuery::create()->filterById(3)->findOne();

        $arrayName = array('status' => 'ok', 'message' => $sell);

        return $arrayName;
    }

    public function changeId($params){
        $params['params'] = preg_replace('[\n|\r|\n\r]', ' ', $params['params']);
        $arrayParams = explode(' ', $params['params']);
        // $ChangeId = new ChangeId();

        $table = "<table id='table' class='table table-condensed table-hover'>";
        $table .= "<tr><th>Anterior ID</th><th>Nuevo ID</th></tr>";

        foreach ($arrayParams as $key => $value) {
            $resultIdResgister = false;
            $value = trim($value);
            $num = strlen($value);
            $newId = substr(md5($value), 0, $num);

            $paramsChangeId['old'] = $value;
            $paramsChangeId['new'] = $newId;
            $clasinfo = "";
            if($key%2 == 0){
                $clasinfo = "info";
            }

            if($num == 24)
                $resultIdResgister = $this->createIdRegister($paramsChangeId);

            // return $resultIdResgister;

            if($resultIdResgister === true){
                $table .= "<tr class='".$clasinfo."'><td>". $value ."</td><td>". $newId ."</td></tr>";
            }else {
                $table .= "<tr class='".$clasinfo."'><td>El regsitro: ". $value ." ya existe o no tiene 24 carácteres</td><td>Por favor use un id valido</td></tr>";
            }

        }

        $table .= "</table>";

        return $table;

    }

    public function getSalesXML($params){
        $result = '';

        if(!isset($params['params']) || empty($params['params'])){
            $result = '<h3>No se recibio un parámetro</3><p>' . $params['params'] . '</p>';
            return $result;
        }

        try{           
            $GroupdealsMerchants = GroupdealsMerchantsQuery::create()->filterByNitNumber($params['params'])->findOne();
            if(empty($GroupdealsMerchants)){
                $result = '<h3>El NIT del Aliado no es valido</3>' . $params['params'];
                return $result;
            } 

            $idMerchant = $GroupdealsMerchants->getMerchantsId();

        }catch (Exception $e){
            $error = 'Caught exception:'.  $e->getMessage(). "\n";
            return $error;
        }

        try{           
            $Groupdeals = GroupdealsQuery::create()->filterByMerchantId($idMerchant)->find();
            if(empty($Groupdeals)){
                $result = '<h3>No hay campañas para este aliado</3>' . $idMerchant;
                return $result;
            }
        }catch (Exception $e){
            $error = 'Caught exception:'.  $e->getMessage(). "\n";
            return $error;
        }

        foreach ($Groupdeals as $key => $campaign) {
            $products[] = $campaign->getProductId();
        }

        try{
            $SalesFlatOrderItem = SalesFlatOrderItemQuery::create()->filterByProductId($products)->find();
            if(empty($SalesFlatOrderItem)){
                $result = '<h3>No hay ordenes para las campañas</3>';
                return $result;
            }
        }catch (Exception $e){
            $error = 'Caught exception:'.  $e->getMessage(). "\n";
            return $error;
        }

        foreach ($SalesFlatOrderItem as $key => $item) {
            //$orderitems[] = $item->getItemId();
            $result .= $this->genXML($item);
        }
        return $result;


    }

    private function  genXML($params){
        //$sku = array('0' => '', '1' => '');
        $xml = new DomDocument('1.0', 'UTF-8');
        //$xml = new DomDocument('1.0');
        $orderId = $params->getOrderId();
        $order = SalesFlatOrderQuery::create()->filterByEntityId($orderId)->findOne();

        $sku = explode(' ', $params->getSku());
        $IDProducto = $sku[0];
        $PLU =  $sku[1];
        $FechaPedido =  $params->getCreatedAt();
        $TipoPedido = $params->getIsVirtual();

        $NumeroPedido = $order->getIncrementId();
        ($order->getCustomerGender() == 1 ) ? $Sexo = 'male': $Sexo = 'female';
        $Nombres = $order->getCustomerFirstname() . ' ' . $order->getCustomerLastname();
        $Nombres = ucwords(strtolower($Nombres));
        $Email = $order->getCustomerEmail();
        $Cedula = $order->getCustomerIdentification();
        $vendorName = $order->getVendorName();

        $pagosOnline = PagosonlineQuery::create()->filterByOrderId($NumeroPedido)->findOne();

        $TipoMedioPago = '';
        $NombreMedioPago = '';
        $Banco = '';
        $Cuotas = '';
        $NumeroTarjeta = '';

        if((!is_null($pagosOnline) && $pagosOnline->getEstadoPol() == 4) || (!is_null($vendorName) && is_null($pagosOnline))){

            if(!is_null($pagosOnline) && $pagosOnline->getEstadoPol() == 4){
                $TipoMedioPago = $pagosOnline->getTipoMedioPago();
                $NombreMedioPago = $pagosOnline->getMedioPago();
                $Banco = $pagosOnline->getBancoPse();
                $Cuotas = $pagosOnline->getCuotas();
                $NumeroTarjeta = $pagosOnline->getNumeroVisible();
            }else if(!is_null($vendorName)){
                $TipoMedioPago = '1';
                $NombreMedioPago = 'Efectivo';
                $Banco = '';
            }

            /* 
		* gen: InfoPedido
		*/
            $InfoPedido = $xml->createElement('ns1:InfoPedido');
            $InfoPedido = $xml->appendChild($InfoPedido);

            /* 
		* var: InfoGeneral
		*/
            $InfoGeneral = $xml->createElement('ns1:InfoGeneral');
            $InfoGeneral = $InfoPedido->appendChild($InfoGeneral);

            $InfoGeneral->setAttribute("NumeroPedido", $NumeroPedido);
            $InfoGeneral->setAttribute("CodigoOrden", $NumeroPedido);
            $InfoGeneral->setAttribute("Canal", "11");
            $InfoGeneral->setAttribute("FechaPedido", $FechaPedido);
            $InfoGeneral->setAttribute("EstadoPedido", "1");
            $InfoGeneral->setAttribute("TipoPedido", $TipoPedido);
            $InfoGeneral->setAttribute("Observaciones", "IP");
            $InfoGeneral->setAttribute("Cadena", "1");
            $InfoGeneral->setAttribute("Extra1", "");
            $InfoGeneral->setAttribute("Extra2", "");
            $InfoGeneral->setAttribute("Extra3", "");

            /* 
		* var: InfoCliente
		*/
            $InfoCliente = $xml->createElement('ns1:InfoCliente');
            $InfoCliente = $InfoPedido->appendChild($InfoCliente);

            $InfoCliente->setAttribute("Nombres", $Nombres);
            $InfoCliente->setAttribute("Email", $Email);
            $InfoCliente->setAttribute("Cedula", $Cedula);
            $InfoCliente->setAttribute("Sexo", $Sexo);
            $InfoCliente->setAttribute("Direccion", "dirección de envio, Soacha");
            $InfoCliente->setAttribute("Telefono", "3114654662");
            $InfoCliente->setAttribute("Ciudad", "154");
            $InfoCliente->setAttribute("Barrio", "-1");
            $InfoCliente->setAttribute("TarjetaPuntos", "");
            $InfoCliente->setAttribute("TarjetaEmpleado", "");
            $InfoCliente->setAttribute("TipoCliente", "");
            $InfoCliente->setAttribute("Extra1", "");
            $InfoCliente->setAttribute("Extra2", "");
            $InfoCliente->setAttribute("Extra3", "");

            /* 
		* var: InfoContacto
		*/
            $InfoContacto = $xml->createElement('ns1:InfoContacto');
            $InfoContacto = $InfoPedido->appendChild($InfoContacto);

            $InfoContacto->setAttribute("Login:", $Email);
            $InfoContacto->setAttribute("Nombre", $Nombres);
            $InfoContacto->setAttribute("NumeroTelefonico", "3114654662");
            $InfoContacto->setAttribute("Email", $Email);
            $InfoContacto->setAttribute("Direccion", "dirección de envio, Soacha");
            $InfoContacto->setAttribute("Telefono", "3114654662");
            $InfoContacto->setAttribute("Ciudad", "154");
            $InfoContacto->setAttribute("Extra1", "");
            $InfoContacto->setAttribute("Extra2", "");
            $InfoContacto->setAttribute("Extra3", "");


            /* 
		* var: InfoMediosPago
		*/
            $InfoMediosPago = $xml->createElement('ns1:InfoMediosPago');
            $InfoMediosPago = $InfoPedido->appendChild($InfoMediosPago);

            $InfoMediosPago->setAttribute("TipoMedioPago:", $TipoMedioPago);
            $InfoMediosPago->setAttribute("NombreMedioPago", $NombreMedioPago);
            $InfoMediosPago->setAttribute("Banco", $Banco);
            $InfoMediosPago->setAttribute("Cuotas", "");
            $InfoMediosPago->setAttribute("NumeroTarjeta", $NumeroTarjeta);
            $InfoMediosPago->setAttribute("Extra1", "");
            $InfoMediosPago->setAttribute("Extra2", "");
            $InfoMediosPago->setAttribute("Extra3", "");

            /* 
		* var: InfoComprador
		*/
            $InfoComprador = $xml->createElement('ns1:InfoComprador');
            $InfoComprador = $InfoPedido->appendChild($InfoComprador);

            $InfoComprador->setAttribute("Nombres:", $Nombres);
            $InfoComprador->setAttribute("Cedula", $Cedula);
            $InfoComprador->setAttribute("Direccion", "dirección de envio, Soacha");
            $InfoComprador->setAttribute("Telefono", "3114654662");
            $InfoComprador->setAttribute("Ciudad", "-1");
            $InfoComprador->setAttribute("Extra1", "");
            $InfoComprador->setAttribute("Extra2", "");
            $InfoComprador->setAttribute("Extra3", "");

            /* 
		* gen: DetallePedido
		*/
            $DetallePedido = $xml->createElement('ns1:DetallePedido');
            $DetallePedido = $xml->appendChild($DetallePedido);

            /* 
		* var: Tienda
		*/
            $Tienda = $xml->createElement('ns1:Tienda');
            $Tienda = $DetallePedido->appendChild($Tienda);

            /* 
		* var: InfoProducto
		*/
            $InfoProducto = $xml->createElement('ns1:InfoProducto');
            $InfoProducto = $Tienda->appendChild($InfoProducto);

            $InfoProducto->setAttribute("IDProducto", $IDProducto);
            $InfoProducto->setAttribute("PLU", $PLU);
            $InfoProducto->setAttribute("Cantidad", "1");
            $InfoProducto->setAttribute("Nombre", "Audifono stereo maxell boton");
            $InfoProducto->setAttribute("ValorVenta", "5900");
            $InfoProducto->setAttribute("DctoProducto", "0");
            $InfoProducto->setAttribute("Iva", "16");
            $InfoProducto->setAttribute("Iniciativa", "Tecnología|Audífonos");
            $InfoProducto->setAttribute("IniciativaSinco", "0");
            $InfoProducto->setAttribute("Ampliado", "false");
            $InfoProducto->setAttribute("DctoMedioPago", "0");
            $InfoProducto->setAttribute("ValorFlete", "0");
            $InfoProducto->setAttribute("TotalValorVenta", "5900");
            $InfoProducto->setAttribute("Observaciones", "");
            $InfoProducto->setAttribute("Presentacion", "UX1");
            $InfoProducto->setAttribute("Marca", "Maxell");
            $InfoProducto->setAttribute("SubLinea", "770016000");
            $InfoProducto->setAttribute("TipoNegociacion", "3");
            $InfoProducto->setAttribute("EsSuperProducto", "2");
            $InfoProducto->setAttribute("Despacho", "Estandar");
            $InfoProducto->setAttribute("Extra1", "");
            $InfoProducto->setAttribute("Extra2", "");
            $InfoProducto->setAttribute("Extra3", "");
            $InfoProducto->setAttribute("Extra4", "");
            $InfoProducto->setAttribute("Extra5", "");

            /* 
		* gen: Totales
		*/
            $Totales = $xml->createElement('ns1:Totales');
            $Totales = $xml->appendChild($Totales);

            /* 
		* var: TotalesSubPedido
		*/
            $TotalesSubPedido = $xml->createElement('ns1:TotalesSubPedido');
            $TotalesSubPedido = $Totales->appendChild($TotalesSubPedido);

            $TotalesSubPedido->setAttribute("TipoSubPedido", "Tienda");
            $TotalesSubPedido->setAttribute("TotalDctoMedioPago", "0");
            $TotalesSubPedido->setAttribute("ValorCompra", "5900");
            $TotalesSubPedido->setAttribute("TotalCompra", "13900");
            $TotalesSubPedido->setAttribute("TotalDctoProducto", "0");
            $TotalesSubPedido->setAttribute("TotalEnvios", "8000");
            $TotalesSubPedido->setAttribute("ValorCompraInicial", "5900");
            $TotalesSubPedido->setAttribute("Extra1", "");
            $TotalesSubPedido->setAttribute("Extra2", "");
            $TotalesSubPedido->setAttribute("Extra3", "");

            /* 
		* var: TotalesPedido
		*/
            $TotalesPedido = $xml->createElement('ns1:TotalesPedido');
            $TotalesPedido = $Totales->appendChild($TotalesPedido);

            $TotalesPedido->setAttribute("ValorCompra", "5900");
            $TotalesPedido->setAttribute("TotalEnvios", "8000");
            $TotalesPedido->setAttribute("TotalCompra", "13900");
            $TotalesPedido->setAttribute("TotalDctoMedioPago", "0");
            $TotalesPedido->setAttribute("TotalDctoProducto", "0");
            $TotalesPedido->setAttribute("ValorCompraInicial", "");
            $TotalesPedido->setAttribute("Extra1", "");
            $TotalesPedido->setAttribute("Extra2", "");
            $TotalesPedido->setAttribute("Extra3", "");

            $xml->formatOutput = true;
            $genxml = $xml->saveXML();
            $genxml = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $genxml);
            $genxml = htmlentities($genxml);
            return $genxml;

        }

        return false;

    }

    private function createIdRegister($params){

        try{           
            $QbcSciSellChangePetition = new QbcSciSellChangePetition();
        }catch (Exception $e){
            $error = $this->exception .  $e->getMessage(). "\n";
            return $error;
        }



        try{           
            $ChangePetitionCount = QbcSciSellChangePetitionQuery::create()->filterByPeticionOld($params['old'])->count();
        }catch (Exception $e){
            $error = $this->exception .  $e->getMessage(). "\n";
            return $error;
        }



        if($ChangePetitionCount == 0){
            try{
                $QbcSciSellChangePetition->setPeticionOld($params['old']);
                $QbcSciSellChangePetition->setPeticionNew($params['new']);
                $QbcSciSellChangePetition->save();

                $QbcSciSellQuery = QbcSciSellQuery::create()->findOneByPetitionId($params['old']);
                if(!empty($QbcSciSellQuery)){
                    $QbcSciSellQuery->setPetitionId($params['new']);
                    $QbcSciSellQuery->save();
                }

                $QbcSciSellDoc = QbcSciSellDocQuery::create()->findOneByPetitionId($params['old']);
                if(!empty($QbcSciSellDoc)){
                    $QbcSciSellDoc->delete();
                }

                if($QbcSciSellDoc->isDeleted() === true){
                    $QbcSciSellDocDelete = new QbcSciSellDocDelete();
                    $QbcSciSellDocDelete->setPetitionId($QbcSciSellDoc->getPetitionId());
                    $QbcSciSellDocDelete->setState($QbcSciSellDoc->getState());
                    $QbcSciSellDocDelete->setDetail($QbcSciSellDoc->getDetail());
                    $QbcSciSellDocDelete->setDocumentId($QbcSciSellDoc->getDocumentId());
                    $QbcSciSellDocDelete->setDocPosition($QbcSciSellDoc->getDocPosition());
                    $QbcSciSellDocDelete->setDocValue($QbcSciSellDoc->getDocValue());
                    $QbcSciSellDocDelete->setDocDate($QbcSciSellDoc->getDocDate());
                    $QbcSciSellDocDelete->save();
                }

            }catch(Exception $e){
                return "Caught exception: ". $e->getMessage();
            }
            return true;
        }
        return false;	

    }

    public function vfallidas($params){
        $IncrementId = trim($params['params']);
        $SalesFlatOrderQuery = SalesFlatOrderQuery::create()->findOneByIncrementId($IncrementId);

        $comando = 'php ../controller/sell_resend_scmp.php ' . 
            $SalesFlatOrderQuery->getEntityId() .
            ' ' . $params['params'];

        $result = system($comando);

    }

    // ********* GENERAR PAGO ALIADO DB **********

    public function & PagoAliado(&$params){ 
        $SellsPetitionId = array();
        $SellsDocumentId = array();
        $DevolutionPetitionId = array();
        $DevolutionNoRedemedPetitionId = array();
        $SellOrderId = "";
        $SellItemId = "";
        $GroupdealsId = trim($params['params']['idcampaign']);

        try{
            $GroupdealsQuery = GroupdealsQuery::create()->findOneByGroupdealsId($GroupdealsId);
            if(empty($GroupdealsQuery)){
                $result = '<h3>No existe la campaña: </3>' . $GroupdealsId;
                return $result;
            }
        }catch (Exception $e){
            $error = $this->exception .  $e->getMessage(). "\n";
            return $error;
        }

        $MerchantId = $GroupdealsQuery->getMerchantId();

        try{           
            $GroupdealsMerchantsQuery = GroupdealsMerchantsQuery::create()->findOneByMerchantsId($MerchantId);
            if(empty($GroupdealsQuery)){
                $result = '<h3>No existe la el Aliado: </3>' . $MerchantId;
                return $result;
            }
        }catch (Exception $e){
            $error = $this->exception .  $e->getMessage(). "\n";
            return $error;
        }

        $TaxStatus = 'false';
        if($params['params']['pcam'] == 0)
            $TaxStatus = 'true';

        $PagoAliadoDTO = array(
            'Campana' => array(
                'CampanaId' => $GroupdealsId,
                'Detalle' => utf8_encode($GroupdealsQuery->getTitleMidium()),
                'Nombre' => utf8_encode($GroupdealsQuery->getTitleShort())),
            'Contexto' => array(
                'Aplicacion' => 'QBC',
                'PeticionId' => substr(md5(strtotime('now')), 0, 24),
                'Usuario' => 'INGQBC'),
            'Exento' => $TaxStatus,
            'Fecha' => date("Y-m-d\TH:i:s"),
            'Moneda' => 'COP',
            'NitAliado' => $GroupdealsMerchantsQuery->getNitNumber(),
            'Periodo' => date('Y')-1 . date('-m-d') . ' ' . date('Y-m-d'),
            'PorcentajeComision' =>  ($GroupdealsQuery->getEtGain() / 100),
            'PorcentajeIVAComision' => ($params['params']['pcam'] / 100),
            'sendSCMP' => $params['params']['send']
        );


        try{           
            $CouponHistoryQuery = CouponHistoryQuery::create()->findByCampaignId($GroupdealsId);
            if(empty($CouponHistoryQuery)){
                $result = '<h3>No hay redenciones : </3>' . json_encode($GroupdealsId);
                return $result;
            }
        }catch (Exception $e){
            $error = $this->exception . $e->getMessage(). "\n";
            return $error;
        }

        foreach ($CouponHistoryQuery as $key => $History) {
            $IncrementIds[] = $History->getOrderId();
            $couponH[$History->getOrderId()][$History->getUnit()] = true;
        }

        //Sells Docs

        try{           
            $QbcSciSellQuery = QbcSciSellQuery::create()->findByOrderId($IncrementIds);
            if(empty($QbcSciSellQuery)){
                $result = '<h3>No hay ventas : </3>' . json_encode($IncrementIds);
                return $result;
            }
        }catch (Exception $e){
            $error = $this->exception . $e->getMessage(). "\n";
            return $error;
        }


        foreach ($QbcSciSellQuery as $key => $Sell) {
            if($Sell->getProcessed() == 0 && isset($couponH[$Sell->getOrderId()][$Sell->getUnit()])){
                $SellsPetitionId[] = $Sell->getPetitionId();
                $SellOrderId = $Sell->getOrderId();
                $SellItemId = $Sell->getItemId();
            }
        }

        try{           
            $QbcSciSellDocQuery = QbcSciSellDocQuery::create()->findByPetitionId($SellsPetitionId);
            if(empty($QbcSciSellDocQuery)){
                $result = '<h3>No hay docs de ventas : </3>' . json_encode($SellsPetitionId);
                return $result;
            }
        }catch (Exception $e){
            $error = $this->exception . $e->getMessage(). "\n";
            return $error;
        }


        foreach ($QbcSciSellDocQuery as $key => $SellDoc) {
            $SellsDocumentId[] = $SellDoc->getDocumentId();
            $paramsSend['SellsDocumentId'][] =  $SellDoc->getDocumentId();
            $paramsSend['SellsDocValue'][] =  $SellDoc->getDocValue();
            $paramsSend['SellsDocPosition'][] =  "00000" . $SellDoc->getDocPosition();
            $paramsSend['SellsDocDate'][] =  $SellDoc->getDocDate();
        }        

        // Devolutions Docs

        try{           
            $QbcSciDevolutionQuery = QbcSciDevolutionQuery::create()->findByCampaignId($GroupdealsId);
            if(empty($QbcSciDevolutionQuery)){
                $result = '<h3>No hay devoluciones : </3>' . json_encode($GroupdealsId);
                return $result;
            }
        }catch (Exception $e){
            $error = $this->exception . $e->getMessage(). "\n";
            return $error;
        }

        foreach ($QbcSciDevolutionQuery as $key => $Devolution) {
            $orderDev = explode('-', $Devolution->getCoupon());
            if($Devolution->getProcessed() == 0 && isset($couponH[$orderDev[0]][$Devolution->getUnit()])){
                $DevolutionPetitionId[] = $Devolution->getPetitionId();
            }else if($Devolution->getProcessed() == 0){
                $DevolutionNoRedemedPetitionId[] = $Devolution->getPetitionId(); // Para incluir las devoluciones no redimidas
            }

        }

        try{           
            $QbcSciDevolutionDocQuery = QbcSciDevolutionDocQuery::create()->findByPetitionId($DevolutionPetitionId);
            if(!empty($QbcSciDevolutionDocQuery)){
                foreach ($QbcSciDevolutionDocQuery as $key => $DevolutionDoc) {
                    $DevolutionsDocumentId[] = $DevolutionDoc->getDocumentId();
                    $paramsSend['DevolutionsDocumentId'][] =  $DevolutionDoc->getDocumentId();
                    $paramsSend['DevolutionsDocValue'][] =  $DevolutionDoc->getDocValue();
                    $paramsSend['DevolutionsDocPosition'][] =  $DevolutionDoc->getDocPosition();
                    $paramsSend['DevolutionsDocDate'][] =  date("Y-m-d", strtotime($DevolutionDoc->getDocDate()));
                }
            }
        }catch (Exception $e){
            $error = $this->exception . $e->getMessage(). "\n";
            return $error;
        }

        try{           
            $QbcSciDevolutionNoRedemedDocQuery = QbcSciDevolutionDocQuery::create()->findByPetitionId($DevolutionNoRedemedPetitionId);
            if(!empty($QbcSciDevolutionNoRedemedDocQuery)){
                foreach ($QbcSciDevolutionNoRedemedDocQuery as $key => $DevolutionNoDoc) {
                    $DevolutionsNoDocumentId[] = $DevolutionNoDoc->getDocumentId();
                    $paramsSend['DevolutionsNoDocumentId'][] =  $DevolutionNoDoc->getDocumentId();
                    $paramsSend['DevolutionsNoDocValue'][] =  $DevolutionNoDoc->getDocValue();
                    $paramsSend['DevolutionsNoDocPosition'][] =  $DevolutionNoDoc->getDocPosition();
                    $paramsSend['DevolutionsNoDocDate'][] =  date("Y-m-d", strtotime($DevolutionNoDoc->getDocDate()));
                }
            }
        }catch (Exception $e){
            $error = $this->exception . $e->getMessage(). "\n";
            return $error;
        }

        $jsonSellsDocumentId = json_encode($SellsDocumentId);

        $result = $this->SendPago($PagoAliadoDTO, $paramsSend);

        if(is_object($result['wsResult']) && $result['wsResult']->Estado == 'aprobado'){
            foreach ($QbcSciSellQuery as $key => $Sell) {
                if($Sell->getProcessed() == 0){
                    $Sell->setProcessed(1);
                    $Sell->save();
                }
            }

            $QbcSciPayment = new QbcSciPayment();
            $QbcSciPayment->setPetitionId($result['PagoAliadoDTO']['Contexto']['PeticionId']);
            $QbcSciPayment->setOrderId($SellOrderId); // revisar
            $QbcSciPayment->setItemId($SellItemId);
            $QbcSciPayment->save();

        }

        return $result;
    }

    public function PagoAlidoXML($params){
        $xml = simplexml_load_string($params['params']['file']);
        $json = json_encode($xml);
        $PagoAliadoDTO = json_decode($json,TRUE);
        $PagoAliadoDTO['sendSCMP'] = $params['params']['send'];
        $result = $this->SendPago($PagoAliadoDTO);
        return $result;
    }

    private function SendPago(&$PagoAliadoDTO, &$params = NULL){
        $wsResult = array();

        try {
            $client = new SoapClient($this->webService, $this->options);
        } catch (Exception $e) {
            $wsResult = $this->exception .  $e->getMessage() . "\n";
        }


        if($params !== NULL){
            $totVen = 0;

            if(isset($params['SellsDocumentId'])){
                $tolSell = count($params['SellsDocumentId']);
                for ($i=0; $i < $tolSell; $i++) { 
                    $PagoAliadoDTO['Ventas'][$i]['Numero'] = $params['SellsDocumentId'][$i];
                    $PagoAliadoDTO['Ventas'][$i]['Posicion'] = $params['SellsDocPosition'][$i];
                    $PagoAliadoDTO['Ventas'][$i]['Valor'] = $params['SellsDocValue'][$i];
                    $PagoAliadoDTO['Ventas'][$i]['Fecha'] = $params['SellsDocDate'][$i] . 'T00:00:00';
                    $totVen = $totVen + $params['SellsDocValue'][$i];
                }
            }

            $totDev = 0;
            $j = 0;
            if(isset($params['DevolutionsDocumentId'])){
                $tolDev = count($params['DevolutionsDocumentId']);
                for ($i=0; $i < $tolDev; $i++) { 
                    $PagoAliadoDTO['Devoluciones'][$i]['Numero'] = $params['DevolutionsDocumentId'][$i];
                    $PagoAliadoDTO['Devoluciones'][$i]['Posicion'] = $params['DevolutionsDocPosition'][$i];
                    $PagoAliadoDTO['Devoluciones'][$i]['Valor'] = $params['DevolutionsDocValue'][$i];
                    $PagoAliadoDTO['Devoluciones'][$i]['Fecha'] = $params['DevolutionsDocDate'][$i] . 'T00:00:00';
                    $totDev = $totDev + $params['DevolutionsDocValue'][$i];
                    $j = $i;
                }
            }

            $totDevNo = 0;
            /*if(isset($params['DevolutionsNoDocumentId'])){
                $tolDevNo = count($params['DevolutionsNoDocumentId']);
                for ($i=0; $i < $tolDevNo; $i++) { 
                    if(!isset($PagoAliadoDTO['Devoluciones'][0]) && $i == 0){$j=0;}else{$j++;}
                    //$j++;
                    $PagoAliadoDTO['Devoluciones'][$j]['Numero'] = $params['DevolutionsNoDocumentId'][$i];
                    $PagoAliadoDTO['Devoluciones'][$j]['Posicion'] = $params['DevolutionsNoDocPosition'][$i];
                    $PagoAliadoDTO['Devoluciones'][$j]['Valor'] = $params['DevolutionsNoDocValue'][$i];
                    $PagoAliadoDTO['Devoluciones'][$j]['Fecha'] = $params['DevolutionsNoDocDate'][$i] . 'T00:00:00';
                    $totDevNo = $totDevNo + $params['DevolutionsNoDocValue'][$i];
                }

                $ComDevNo = round($totDevNo * $PagoAliadoDTO['PorcentajeComision']);
                $ComIvaDevNo = round($ComDevNo * $PagoAliadoDTO['PorcentajeIVAComision']);
                $totDevNo = $totDevNo - ($ComDevNo + $ComIvaDevNo);

            }*/ // Se invalida mientras se realizan ajustes

            $totVen = $totVen - $totDev;
            $PagoAliadoDTO['ValorComision'] = round($totVen * $PagoAliadoDTO['PorcentajeComision']);
            $PagoAliadoDTO['ValorIVAComision'] = round($PagoAliadoDTO['ValorComision'] * $PagoAliadoDTO['PorcentajeIVAComision']);
            $PagoAliadoDTO['ValorCxPAliado'] = $totVen - ($PagoAliadoDTO['ValorComision'] + $PagoAliadoDTO['ValorIVAComision'] + $totDevNo);
        }
        // natsort ( $PagoAliadoDTO );
        $xmlResult = $this->array2XML($PagoAliadoDTO);

        if($PagoAliadoDTO['sendSCMP'] == 0){
            $resultado =  array('wsResult' => $wsResult, 'PagoAliadoDTO' => $PagoAliadoDTO, 'XML' => $xmlResult);
            return $resultado;
        }elseif($PagoAliadoDTO['sendSCMP'] == 1){
            unset($PagoAliadoDTO['sendSCMP']);
            $peticionDTO['peticionDTO'] = $PagoAliadoDTO;

            try
            {
                $webService = $client-> PagosAliado($peticionDTO);
                $wsResult = $webService->PagosAliadoResult;
            }
            catch (Exception $e)
            {
                $wsResult = 'Caught exception:' .  $e->getMessage() .  "\n";
            } 

            $resultado =  array('wsResult' => $wsResult, 'PagoAliadoDTO' => $PagoAliadoDTO, 'XML' => $xmlResult);

            return $resultado;
        }
    }


    private function array2XML($data, $rootNodeName = 'PagoAliadoDTO', $xml=NULL){
        if ($xml == null){
            /* $xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><$rootNodeName />" */
            $xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><$rootNodeName  xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"  />");
        }

        foreach($data as $key => $value){
            if (is_numeric($key)){
                // if($rootNodeName == 'PagoAliadoDTO'){
                $key = "DocumentoContableDTO";
                //  }else{
                //      $key = "nodeId_". (string) $key;
                //  }
            }

            if (is_array($value)){
                $node = $xml->addChild($key);
                $this->array2XML($value, $rootNodeName, $node);
            } else {
                $value = htmlentities($value);
                $xml->addChild($key, $value);
            }

        }
        $genxml = $xml->asXML();
        $genxml = trim(str_replace('<?xml version="1.0" encoding="utf-8"?>', '', $genxml));
        //$genxml = htmlentities($genxml);
        $genxml = html_entity_decode($genxml);
        return $genxml;
    }

    public function & sendxmlsell(&$params){

        if(!isset($params['params']) || empty($params['params'])){
            $result = array(
                'status' => 'error',
                'message' => 'VALUE_IS_NULL_OR_EMPTY');
            return $result;
        }

        $xml = simplexml_load_string($params['params']);

        if($xml === false){
            $result = array(
                'status' => 'error',
                'message' => 'VALUE_IS_NOT_XML_FILE');
            return $result;
        }

        $idSell = $xml->attributes()->id;

        if(empty($idSell)){
            $result = array(
                'status' => 'error',
                'message' => 'ID_SELL_IS_NULL_OR_EMPTY');
            return $result;
        }

        $oldIdPetition = $xml->contexto->attributes()->idPeticion;

        if(empty($oldIdPetition)){
            $result = array(
                'status' => 'error',
                'message' => 'ID_PETITION_IS_NULL_OR_EMPTY');
            return $result;
        }

        $seemBaseIdPetition = strtotime('now');
        $md5IdPetition = md5($seemBaseIdPetition);
        $newIdPetition = substr($md5IdPetition, 0 ,24);

        try{
            $QbcSciSellQuery = QbcSciSellQuery::create()->findOneByPetitionId(trim($oldIdPetition));
            if(empty($QbcSciSellQuery)){
                $result = array(
                    'status' => 'error',
                    'message' => 'Id petition: ' . $oldIdPetition . ' is no set - The new one is: ' . $newIdPetition,
                    'oldIdPetition' => "$oldIdPetition",
                    'newIdPetition' => $newIdPetition);
            }
        }catch (Exception $e){
            $result = array(
                'status' => 'exception',
                'message' => 'Caught exception:'.  $e->getMessage());
            return $result;
        }

        $xml->contexto->attributes()->idPeticion = $newIdPetition;

        $xml = $xml->asXML();
        $xml = trim(str_replace('<?xml version="1.0"?>', '', $xml));

        $paramsSell = array(
            'idPeticion' => $newIdPetition,
            'idVenta' => $idSell,
            'xml' =>  $xml);

        $resultSell = $this->sendSell($paramsSell);

        if($resultSell->Estado == 'aprobado' && !empty($QbcSciSellQuery)){
            $QbcSciSellQuery->setPetitionId($newIdPetition);
            $QbcSciSellQuery->save();
            $result['save'] = 'true';
        }

        $result['resultSell'] = $resultSell;

        return $result;

    }

    private function sendSell(&$params){
        try {
            $client = new SoapClient($this->webService, $this->options);
        } catch (Exception $e) {
            $result = array(
                'status' => 'exception',
                'message' => 'Caught exception:'.  $e->getMessage(),
                'webservice' => $this->webService);
            return $result;
        }

        $peticionDTO['peticionDTO'] = array(
            'Contexto' => array(
                'Aplicacion' => 'QBC',
                'PeticionId' => $params['idPeticion'],
                'Usuario' => 'INGQBC'),
            'ConversacionId' => $params['idVenta'],
            'DestinoId' => 'SCMP',
            'ProcesoInmediato' => '1',
            'TipoPeticionId' => 'REGO',
            'XmlEnvio' => $params['xml']);

        try
        {
            $webService = $client->PeticionSCMP($peticionDTO);
            $result = $webService->PeticionSCMPResult;
        }
        catch (Exception $e)
        {
            $result = array(
                'status' => 'exception',
                'message' => 'Caught exception:'.  $e->getMessage());
        } 

        return $result;
    }

    public function & ConpensationOffer(&$params){

        $GroupdealsIds = array();

        parse_str($params['params']['idcampaign'], $GroupdealsIds);

        $sendSCMP = $params['params']['send'];

        foreach($GroupdealsIds as $GroupdealsId){

            try{
                $BaseQbcSciClosureQuery = BaseQbcSciClosureQuery::create()->findByCampaignId($GroupdealsId);
                if(empty($BaseQbcSciClosureQuery)){
                    // $result = '<h3>El id no es valido: </3>' . $GroupdealsId;
                    // return $result;
                    $result[] = "El id no es valido:" . $GroupdealsId;
                    break;
                }
            }catch (Exception $e){
                $error = $this->exception .  $e->getMessage(). "\n";
                return $error;
            }


            try{
                $GroupdealsQuery = GroupdealsQuery::create()->findOneByGroupdealsId($GroupdealsId);
                if(empty($GroupdealsQuery)){
                    // $result = '<h3>No existe la campaña: </3>' . $GroupdealsId;
                    //return $result;
                    $result[] = "El id no es valido:" . $GroupdealsId;
                    break;
                }
            }catch (Exception $e){
                $error = $this->exception .  $e->getMessage(). "\n";
                return $error;
            }

            $MerchantId = $GroupdealsQuery->getMerchantId();

            try{           
                $GroupdealsMerchantsQuery = GroupdealsMerchantsQuery::create()->findOneByMerchantsId($MerchantId);
                if(empty($GroupdealsQuery)){
                    $result = '<h3>No existe la el Aliado: </3>' . $MerchantId;
                    return $result;
                }
            }catch (Exception $e){
                $error = $this->exception .  $e->getMessage(). "\n";
                return $error;
            }



            foreach($BaseQbcSciClosureQuery as $key => $Closure){

                if($key == 0){
                    $CierreAliadoDTO = array(
                        'Campana' => array(
                            'CampanaId' => $Closure->getCampaignId(),
                            'Detalle' => utf8_encode($GroupdealsQuery->getTitleMidium()),
                            'Nombre' => utf8_encode($GroupdealsQuery->getTitleShort())),
                        'Contexto' => array(
                            'Aplicacion' => 'QBC',
                            'PeticionId' => substr(md5(strtotime('now')), 0, 24),
                            'Usuario' => 'INGQBC'),
                        'Fecha' => date("Y-m-d\TH:i:s"),
                        'NitAliado' => $GroupdealsMerchantsQuery->getNitNumber(),
                        'NombreAliado' => utf8_encode($GroupdealsMerchantsQuery->getLegalName()),
                        'Valor' => '0',
                        'sendSCMP' => $sendSCMP

                    );
                }

                $sellValue = explode('.', $Closure->getSellValue());
                $CierreAliadoDTO['Ventas'][$key]['Numero'] = $Closure->getSellDoc();
                $CierreAliadoDTO['Ventas'][$key]['Posicion'] = '000001';
                $CierreAliadoDTO['Ventas'][$key]['Valor'] = $sellValue[0];
                $CierreAliadoDTO['Ventas'][$key]['Fecha'] =  date("Y-m-d", strtotime($Closure->getSellDate())) . 'T00:00:00';

                $devValue = explode('.', $Closure->getDevValue());
                $CierreAliadoDTO['Devoluciones'][$key]['Numero'] = $Closure->getDevDoc();
                $CierreAliadoDTO['Devoluciones'][$key]['Posicion'] = '000001';
                $CierreAliadoDTO['Devoluciones'][$key]['Valor'] = $devValue[0];
                $CierreAliadoDTO['Devoluciones'][$key]['Fecha'] = date('Y-m-d', strtotime($Closure->getDevDate())) . 'T00:00:00';

                if($sendSCMP == 1){
                    $Closure->setStatus(1);
                    $Closure->save();
                }

            }


            $result[] = $this->SendClosure($CierreAliadoDTO);

        }

        return $result;

    }


    private function SendClosure(&$CierreAliadoDTO, &$params = NULL){
        $wsResult = array();

        try {
            $client = new SoapClient($this->webService, $this->options);
        } catch (Exception $e) {
            $wsResult = $this->exception .  $e->getMessage() . "\n";
        }



        $xmlResult = $this->array2XML($CierreAliadoDTO, 'CierreOfertaDTO');

        if($CierreAliadoDTO['sendSCMP'] == 0){
            $resultado =  array('wsResult' => $wsResult, 'CierreAliadoDTO' => $CierreAliadoDTO, 'XML' => $xmlResult);
            return $resultado;
        }elseif($CierreAliadoDTO['sendSCMP'] == 1){
            unset($CierreAliadoDTO['sendSCMP']);
            $peticionDTO['peticionDTO'] = $CierreAliadoDTO;

            try
            {
                $webService = $client->CierreOfertas($peticionDTO);
                $wsResult = $webService->CierreOfertasResult;

            }
            catch (Exception $e)
            {
                $wsResult = 'Caught exception:' .  $e->getMessage() .  "\n";
            }


            $result =  array('wsResult' => $wsResult, 'CierreAliadoDTO' => $CierreAliadoDTO, 'XML' => $xmlResult);

            if(is_object($result['wsResult']) && $result['wsResult']->Estado == 'aprobado'){

                $QbcSciOfferClosure = new QbcSciOfferClosure();
                $QbcSciOfferClosure->setPetitionId($result['CierreAliadoDTO']['Contexto']['PeticionId']);
                $QbcSciOfferClosure->setMerchantId($result['CierreAliadoDTO']['NitAliado']);
                $QbcSciOfferClosure->setCampaignId($result['CierreAliadoDTO']['Campana']['CampanaId']);
                $QbcSciOfferClosure->setSalesDocuments(json_encode($result['CierreAliadoDTO']['Ventas'])); // revisar
                $QbcSciOfferClosure->setDevolutionDocuments(json_encode($result['CierreAliadoDTO']['Devoluciones']));
                $QbcSciOfferClosure->save();

            }

            return $result;

        }


    }

    public function & ClosureOffer(&$params){
        return $params;
    }

    public function & ListClosure(&$params){
        try{
            $BaseQbcSciClosureQuery = BaseQbcSciClosureQuery::create()->find();
            if(empty($BaseQbcSciClosureQuery)){
                $result = '<h3>No existen la campañas: </3>' . $GroupdealsId;
                return $result;
            }
        }catch (Exception $e){
            $error = $this->exception .  $e->getMessage(). "\n";
            return $error;
        }

        foreach($BaseQbcSciClosureQuery as $key => $Closure){
            if($Closure->getStatus() == 0)
                $ids[] = $Closure->getCampaignId();
        }

        $result = array_unique($ids);
        return $result;
    }




}