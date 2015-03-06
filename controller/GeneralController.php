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
        $Querys = new Querys();
        $SalesFlatOrderQuery = $Querys->SalesFlatOrderByIncrementId($params);
        $result = array(
            'status' => 'ok',
            'message' => 'php ./controller/sell_resend_scmp.php ' . 
            $SalesFlatOrderQuery->getEntityId() .
            ' ' . $params['id']
        );
        return $result;

    }

    private function getCouponsRedeemed($params){
        $Querys = new Querys();
        $CouponHistoryQuery = $Querys->CouponHistoryByCampaignId($params);

        foreach ($CouponHistoryQuery as $key => $History) {
            $IncrementIds[] = $History->getOrderId();
            $couponH[$History->getOrderId()][$History->getUnit()] = true;
        }

        $result = array(
            'ids' => $IncrementIds, 
            'coupons' => $couponH
        );
        return $result;

    }

    private function getSellRedeemed($params){
        $Querys = new Querys();
        $SellsPetitionId = array();
        $SellOrderId = '';
        $SellItemId = '';
        $QbcSciSellQuery = $Querys->QbcSciSellByIncrementId($params['ids']);

        foreach ($QbcSciSellQuery as $key => $Sell) {
            if($Sell->getProcessed() == 0 && isset($params['coupons'][$Sell->getOrderId()][$Sell->getUnit()])){
                $SellsPetitionId[] = $Sell->getPetitionId();
                $SellOrderId = $Sell->getOrderId();
                $SellItemId = $Sell->getItemId();
            }
        }

        $result = array(
            'petitions' => $SellsPetitionId, 
            'orderId' => $SellOrderId,
            'itemId' => $SellItemId
        );

        return $result;
    }

    private function getSellDocuments($params){
        $Querys = new Querys();
        $result = array();
        $QbcSciSellDocQuery = $Querys->QbcSciSellDocByPetitionId($params);

        foreach ($QbcSciSellDocQuery as $key => $SellDoc) {
            $result['SellsDocumentId'][] =  $SellDoc->getDocumentId();
            $result['SellsDocValue'][] =  $SellDoc->getDocValue();
            $result['SellsDocPosition'][] =  "00000" . $SellDoc->getDocPosition();
            $result['SellsDocDate'][] =  $SellDoc->getDocDate();
        }
        return $result;
    }


    private function getDevolutions($params, $coupons){
        $QbcSciDevolutionQuery = QbcSciDevolutionQueryByCampaignId($params);

        foreach ($QbcSciDevolutionQuery as $key => $Devolution) {
            $orderDev = explode('-', $Devolution->getCoupon());
            if($Devolution->getProcessed() == 0 && isset($coupons[$orderDev[0]][$Devolution->getUnit()])){
                $result['devolutionRedeemed'][] = $Devolution->getPetitionId();
            }else if($Devolution->getProcessed() == 0){
                $result['devolutionNoRedeemed'][] = $Devolution->getPetitionId(); // Para incluir las devoluciones no redimidas
            }
        }
        return $result;
    }


    // ********* GENERAR PAGO ALIADO DB **********

    public function & PagoAliado(&$params){

        // var_dump($params); die();

        if(empty($params) || !isset($params))
            die('VALUE_NULL');

        $SellsPetitionId = array();
        $SellsDocumentId = array();
        $DevolutionPetitionId = array();
        $DevolutionNoRedemedPetitionId = array();
        $SellOrderId = "";
        $SellItemId = "";
        $GroupdealsParams['id'] = trim($params['campaing_id']);
        $Querys = new Querys();

        //$GroupdealsQuery = $this->GroupdealsQueryById($GroupdealsParams);

        $GroupdealsQuery   = $Querys->GroupdealsById($GroupdealsParams);

        $MerchantParams['id'] = $GroupdealsQuery->getMerchantId();

        //$GroupdealsMerchantsQuery = $this->GroupdealsMerchantsQueryById($MerchantParams);
        $GroupdealsMerchantsQuery = $Querys->GroupdealsMerchantsById($MerchantParams);

        $CouponsRedeemed = $this->getCouponsRedeemed($GroupdealsParams);
        $SellRedeemed = $this->getSellRedeemed($CouponsRedeemed);
        $paramsSend = $this->getSellDocuments($SellRedeemed);

        $TaxStatus = 'false';
        if($params['campaing_tax'] == 0)
            $TaxStatus = 'true';

        $PagoAliadoDTO = array(
            'Campana' => array(
                'CampanaId' => $GroupdealsParams['id'],
                'Detalle' => utf8_encode($GroupdealsQuery->getTitleMidium()),
                'Nombre' => 'COMISIÓN ' .  utf8_encode($GroupdealsQuery->getTitleShort())),
            'Contexto' => array(
                'Aplicacion' => 'QBC',
                'PeticionId' => substr(md5(strtotime('now')), 0, 24),
                'Usuario' => 'INGQBC'),
            'Exento' => $TaxStatus,
            'Fecha' => date("Y-m-d\TH:i:s"),
            'Moneda' => $params['currency'],
            'NitAliado' => $GroupdealsMerchantsQuery->getNitNumber(),
            'Periodo' => date('Y')-1 . date('-m-d') . ' ' . date('Y-m-d'),
            'PorcentajeComision' =>  ($GroupdealsQuery->getEtGain() / 100),
            'PorcentajeIVAComision' => ($params['campaing_tax'] / 100),
            'sendSCMP' => $params['send']
        );




        /* $devolutions = $this->getDevolutions($GroupdealsParams, $CouponsRedeemed['coupons']);

        $paramsSend = $this->getDevolutionDocs($devolutions['devolutionRedeemed']);

        $paramsSend = $this->getDevolutionDocs($devolutions['devolutionNoRedeemed']);
*/
        // Devolutions Docs

        //$QbcSciDevolutionQuery = $this->QbcSciDevolutionQueryByCampaignId($GroupdealsParams);
        $QbcSciDevolutionQuery = $Querys->QbcSciDevolutionByCampaignId($GroupdealsParams);

        foreach ($QbcSciDevolutionQuery as $key => $Devolution) {
            $orderDev = explode('-', $Devolution->getCoupon());
            if($Devolution->getProcessed() == 0 && isset($CouponsRedeemed['coupons'][$orderDev[0]][$Devolution->getUnit()])){
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
            $QbcSciDevolutionNoRedemedDocQuery = QbcSciDevolutionDocQuery::create()
                ->findByPetitionId($DevolutionNoRedemedPetitionId);
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
            $QbcSciPayment->setOrderId($SellRedeemed['orderId']); // revisar
            $QbcSciPayment->setItemId($SellRedeemed['itemId']);
            $QbcSciPayment->save();

        }

        return $result;
    }

    public function PagoAlidoXML($params){
        $xml = simplexml_load_string($params['file']);
        $json = json_encode($xml);
        $PagoAliadoDTO = json_decode($json,TRUE);
        $PagoAliadoDTO['sendSCMP'] = $params['send'];
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

        if(!isset($params['xmltext']) || empty($params['xmltext'])){
            $result = array(
                'status' => 'error',
                'message' => 'VALUE_IS_NULL_OR_EMPTY');
            return $result;
        }

        libxml_use_internal_errors(true);
        $xml = simplexml_load_string($params['xmltext']);

        if($xml === false){
            $result = array(
                'status' => 'error',
                'message' => 'VALUE_IS_NOT_XML_FILE',
                'error-list' => libxml_get_errors()
            );
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

        $Querys = new Querys();

        $paramsQuery = array(
            'id' => trim($oldIdPetition),
            'no_die' => 'true'
        );

        $QbcSciSellQuery = $Querys->QbcSciSellByPetitionId($paramsQuery);

        $xml->contexto->attributes()->idPeticion = $newIdPetition;

        $xml = $xml->asXML();
        $xml = trim(str_replace('<?xml version="1.0"?>', '', $xml));

        $paramsSell = array(
            'idPeticion' => $newIdPetition,
            'idVenta' => $idSell,
            'xml' =>  $xml);

        $resultSell = $this->sendSell($paramsSell);

        if($resultSell->Estado == 'aprobado' && is_object($QbcSciSellQuery)){
            $QbcSciSellQuery->setPetitionId($newIdPetition);
            $QbcSciSellQuery->save();
            $result['save'] = 'true';
            $result['create'] = $oldIdPetition . ' - ' . $newIdPetition;
            $result['replace'] = 'false';
        }else if($resultSell->Estado == 'aprobado' && !is_object($QbcSciSellQuery)){
            $QbcSciSell = new QbcSciSell();
            $QbcSciSell->setPetitionId($newIdPetition);
            $QbcSciSell->setOrderId($idSell);
            //$QbcSciSell->setCreatedAt(date("Y-m-d H:i:s"));
            $QbcSciSell->save();
            $result['save'] = 'true';
            $result['create'] = $newIdPetition;
            $result['replace'] = 'false';
        }

        $result['resultSell'] = $resultSell;

        return $result;

    }

    ///// *********************** Ventas por valor POL - Descuento **************************** ///

    public function & sendSellDiscount(&$params){

        $Querys = new Querys();

        // Validacion id Pedido
        if(!isset($params['id']) || empty($params['id'])){
            $result = array(
                'status' => 'error',
                'message' => 'VALUE_IS_NULL_OR_EMPTY');
            return $result;
        }

        $CouponMappingQuery = $Querys->CouponMappingByIncrementId($params);
        $paramsOrder['id'] = $CouponMappingQuery->getOrderId();
        $paramsItem['id'] = $CouponMappingQuery->getItemId();

        $SalesFlatOrderQuery = $Querys->SalesFlatOrderByEntityId($paramsOrder);
        $totalItems = $SalesFlatOrderQuery->getTotalQtyOrdered();
        $CustomerName = $SalesFlatOrderQuery->getCustomerFirstname() . " " . $SalesFlatOrderQuery->getCustomerLastname();

        $SalesFlatOrderItemQuery = $Querys->SalesFlatOrderItemByItemId($paramsItem);
        $paramsGroupDeals['id'] = $SalesFlatOrderItemQuery->getProductId(); 
        $paramsGroupDeals['one'] = 1;

        $GroupdealsQuery = $Querys->GroupdealsByProductId($paramsGroupDeals);
        $paramsTreasury['id'] =  $GroupdealsQuery->getTreasuryType();
        $paramsMerchants['id'] =  $GroupdealsQuery->getMerchantId();

        $TreasuryTypesQuery = $Querys->TreasuryTypesById($paramsTreasury);
        $tresauryIva = $TreasuryTypesQuery->getIva();

        $PagosOnLineQuery = $Querys->PagosonlineByIncrementId($params);
        $totalPay = $PagosOnLineQuery->getValor();

        $GroupdealsMerchantsQuery = $Querys->GroupdealsMerchantsById($paramsMerchants);

        $totalPay = round($totalPay, 0);
        $payToItem = $totalPay;
        $payToLastItem = 0;
        if($totalItems > 1){
            $payToItem = round(($totalPay / $totalItems), 0);
            $payToLastItem = $totalPay - ($payToItem * ($totalItems - 1));
        }

        $tasaIva = 0;
        if($tresauryIva > 0)
            $tasaIva = $tresauryIva / 100;

        $order = array(
            'ventaId' => $params['id'],
            'totalPay' => $totalPay,
            'totalItems' => $totalItems,
            'payToItem' => $payToItem,
            'payToLastItem' => $payToLastItem,
            'tasaIva' => $tasaIva,
            'tresauryCode' => $TreasuryTypesQuery->getCode(),
            'tresauryIva' => $tresauryIva,
            'tipoMedioPAgo' => $PagosOnLineQuery->getTipoMedioPago(),
            'numeroTarjeta' => $PagosOnLineQuery->getNumeroVisible(),
            'medioPago' => $PagosOnLineQuery->getMedioPago(),
            'autorizacion' => $PagosOnLineQuery->getCodigoAutorizacion(),
            'cus' => $PagosOnLineQuery->getCus(),
            'cuotas' => $PagosOnLineQuery->getCuotas(),
            'productName' => utf8_encode($GroupdealsQuery->getTitleShort()),
            'idCampaing' => $GroupdealsQuery->getGroupdealsId(),
            'nit' => $GroupdealsMerchantsQuery->getNitNumber(),
            'customerIdentification' => $SalesFlatOrderQuery->getCustomerIdentification(),
            'customerName' => utf8_encode($CustomerName)
        );

        $pagoItem['valor'] = $totalPay;

        $resultSellArray = array();

        for($i =1; $i<=$totalItems;$i++){

            $totalBruto = $order['payToItem'];
            if($order['tresauryIva'] > 0)
                $totalBruto = round(($order['payToItem'] /(1 + $order['tasaIva'])), 0);

            if($order['payToLastItem'] > 0 && $i == $totalItems){
                $order['payToItem'] = $order['payToLastItem'];
                $totalBruto = $order['payToLastItem'];
                if($order['tresauryIva'] > 0)
                    $totalBruto = round(($order['payToItem'] /(1 + $order['tasaIva'])), 0);
            }

            $pagoItem['valorItem'][] = $order['payToItem'];
            $pagoItem['payToLastItem'][] = $order['payToLastItem'];
            // Creación XML
            libxml_use_internal_errors(true);
            $xml = simplexml_load_file("./views/sell.xml");

            if($xml === false){
                $result = array(
                    'status' => 'error',
                    'message' => 'VALUE_IS_NOT_XML_FILE',
                    'error-list' => libxml_get_errors()
                );
                return $result;
            }

            $xml->attributes()->id = $order['ventaId'];
            $xml->attributes()->totalNeto = $order['payToItem'];
            $xml->attributes()->totalBruto = $totalBruto;
            $xml->attributes()->tasaImpuesto1 = $order['tasaIva'];

            $xml->pagos->pago->attributes()->valor = $order['payToItem'];
            $xml->pagos->pago->attributes()->idVenta = $order['ventaId'];
            $xml->pagos->pago->attributes()->id = $i;

            if($order['tipoMedioPAgo'] == 2){
                $xml->pagos->pago->attributes()->medio = 3;

                $pagoAtributos = $xml->pagos->pago->atributos->addChild('atributo');
                $pagoAtributos->addAttribute("clave", "numeroTarjeta");
                $pagoAtributos->addAttribute("valor", $order['numeroTarjeta']);

                if($order['medioPago'] == 11){ // Master
                    $order['franquicia'] = 2;
                }else if($order['medioPago'] == 10){ // Visa
                    $order['franquicia'] = 4;
                }else if($order['medioPago'] == 22){ //Diners
                    $order['franquicia'] = 1;
                }else if($order['medioPago'] == 12){ // Amex
                    $order['franquicia'] = 5;
                }

                $pagoAtributos = $xml->pagos->pago->atributos->addChild('atributo');
                $pagoAtributos->addAttribute("clave", "Franquicia");
                $pagoAtributos->addAttribute("valor", $order['franquicia']);

                $pagoAtributos = $xml->pagos->pago->atributos->addChild('atributo');
                $pagoAtributos->addAttribute("clave", "Autorizacion");
                $pagoAtributos->addAttribute("valor", $order['autorizacion']);

                $pagoAtributos = $xml->pagos->pago->atributos->addChild('atributo');
                $pagoAtributos->addAttribute("clave", "numeroCuotas");
                $pagoAtributos->addAttribute("valor", $order['cuotas']);

            }else if($order['tipoMedioPAgo'] == 4){
                $xml->pagos->pago->attributes()->medio = 26;

                $pagoAtributos = $xml->pagos->pago->atributos->addChild('atributo');
                $pagoAtributos->addAttribute("clave", "Autorizacion");
                $pagoAtributos->addAttribute("valor", $order['cus']);


            }else if($order['tipoMedioPAgo'] == 8){
                $xml->pagos->pago->attributes()->medio = 30;

                $pagoAtributos = $xml->pagos->pago->atributos->addChild('atributo');
                $pagoAtributos->addAttribute("clave", "Autorizacion");
                $pagoAtributos->addAttribute("valor", $order['ventaId']);
            }

            $xml->productos->producto->attributes()->tasaImpuesto1 = $order['tasaIva'];
            $xml->productos->producto->attributes()->impuesto1 = $order['payToItem'] - $totalBruto;
            $xml->productos->producto->attributes()->bruto = $totalBruto;
            $xml->productos->producto->attributes()->neto = $order['payToItem'];
            $xml->productos->producto->attributes()->id = $order['idCampaing'];
            $xml->productos->producto->atributos->atributo[0]->attributes()->valor = $order['tresauryCode'];
            $xml->productos->producto->atributos->atributo[1]->attributes()->valor = utf8_encode($order['productName']);
            $xml->productos->producto->atributos->atributo[2]->attributes()->valor = $order['nit'];

            $xml->conceptos->concepto->attributes()->tasaImpuesto1 = $order['tasaIva'];
            $xml->conceptos->concepto->attributes()->impuesto1 = $order['payToItem'] - $totalBruto;
            $xml->conceptos->concepto->attributes()->bruto = $totalBruto;
            $xml->conceptos->concepto->attributes()->neto = $order['payToItem'];
            $xml->conceptos->concepto->attributes()->id = $order['idCampaing'];

            $xml->cliente->attributes()->id = $order['customerIdentification'];
            $xml->cliente->attributes()->nombre = $order['customerName'];

            $seemBaseIdPetition = strtotime('now');
            $md5IdPetition = md5($seemBaseIdPetition);
            $order['newIdPetition'] = substr($md5IdPetition, 0 ,24);

            $xml->contexto->attributes()->idPeticion = $order['newIdPetition'];


            $xml = $xml->asXML();
            $xml = trim(str_replace('<?xml version="1.0" encoding="utf-8"?>', '', $xml));

            $paramsSell = array(
                'idPeticion' => $order['newIdPetition'],
                'idVenta' => $order['ventaId'],
                'xml' =>  $xml);

            if($params['send'] == 1){
                $resultSell = $this->sendSell($paramsSell);
                if($resultSell->Estado == 'aprobado'){
                    $QbcSciSell = new QbcSciSell();
                    $QbcSciSell->setPetitionId($order['newIdPetition']);
                    $QbcSciSell->setOrderId($order['ventaId']);
                    $QbcSciSell->setItemId($paramsItem['id']);
                    $QbcSciSell->setUnit($i);
                    //$QbcSciSell->setCreatedAt(date("Y-m-d H:i:s"));
                    $QbcSciSell->save();
                }
                $resultSellArray[] = $resultSell;
            }
            $orderArray[] = $order;

        }


        $result['resultSell'] = $resultSellArray;
        $result['order'] = $orderArray;
        return $result;

    }


    public function & sendxmldev(&$params){

        $wsResult = array();

        $xml = simplexml_load_string($params['params']['xml']);
        $json = json_encode($xml);
        $DevolucionDTO = json_decode($json,TRUE);

        try {
            $client = new SoapClient($this->webService, $this->options);
        } catch (Exception $e) {
            $wsResult = $this->exception .  $e->getMessage() . "\n";
        }

        $peticionDTO['peticionDTO'] = $DevolucionDTO;

        try
        {
            $webService = $client-> Devoluciones($peticionDTO);
            $wsResult = $webService->DevolucionesResult;
        }
        catch (Exception $e)
        {
            $wsResult = 'Caught exception:' .  $e->getMessage() .  "\n";
        } 

        $resultado =  array('wsResult' => $wsResult, 'DevolucionDTO' => $DevolucionDTO);

        return $resultado;
        // }

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

        $sendSCMP = $params['send'];
        $GroupdealsIds = array();

        unset($params['__route__']);
        unset($params['send']);

        foreach($params as $GroupdealsId){

            try{
                $BaseQbcSciClosureQuery = QbcSciClosureQuery::create()->filterByStatus(0)->findByCampaignId($GroupdealsId);
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

    // ********* GENERAR CIERRE OFERTA DB **********

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

    public function & pancartaCons(&$params){
        // $Querys = new Querys();

        return $params;

    }

    public function & tryPay($params){
        $Querys = new Querys();
        $result = $Querys->GroupdealsPaginateComision($params);
        return $result;
    }

    public function & newsloe(&$params){
    
 
        $jsonfile = file_get_contents($_SERVER["HTTP_REFERER"] . "loe/loeproducts.json");
        
        $dataInfo = json_decode($jsonfile, true);

       
        if($params['type'] == 0){
            $dataArray = array(
                'type' => $params['type'],
                'title' => $params['title'],
                'image' => $params['image'],
                'url' => $params['url']
            );

            if(!empty($params['retaila'])){
                $dataArray['sites']['0'] = array(
                    'name' => $params['retaila'],
                    'value' => $params['valuea'],
                    'url' => $params['urla'],
                    'active' => '1'
                );
            }

            if(!empty($params['retailb'])){
                $dataArray['sites']['1'] = array(
                    'name' => $params['retailb'],
                    'value' => $params['valueb'],
                    'url' => $params['urlb'],
                    'active' => '0'
                );
            }

            if(!empty($params['retailc'])){
                $dataArray['sites']['2'] = array(
                    'name' => $params['retailc'],
                    'value' => $params['valuec'],
                    'url' => $params['urlc'],
                    'active' => '0'
                );
            }

            if(!empty($params['retaild'])){
                $dataArray['sites']['3'] = array(
                    'name' => $params['retaild'],
                    'value' => $params['valued'],
                    'url' => $params['urld'],
                    'active' => '0'
                );
            }

            if($params['position'] == 1){
                $dataInfo['dataInfo']['upper']['0'] = $dataArray;
            }

            if($params['position'] == 2){
                $dataInfo['dataInfo']['upper']['1'] = $dataArray;
            }

            if($params['position'] == 3){
                $dataInfo['dataInfo']['lower']['0'] = $dataArray;
            }

            if($params['position'] == 4){
                $dataInfo['dataInfo']['lower']['1'] = $dataArray;
            }


            // print "<pre>"; var_dump($dataInfo); print "</pre>"; die();




            $result = $dataInfo;



        }else{



            $dataArray = array(
                'type' => $params['type'],
                'title' => $params['title'],
                'image' => $params['image'],
                'url' => $params['url'],
                'percent' => $params['percent'],
                'retail' => $params['retail'],
                'value' => $params['value']
            );

            if($params['position'] == 1){
                $dataInfo['dataInfo']['upper']['0'] = $dataArray;
            }

            if($params['position'] == 2){
                $dataInfo['dataInfo']['upper']['1'] = $dataArray;
            }

            if($params['position'] == 3){
                $dataInfo['dataInfo']['lower']['0'] = $dataArray;
            }

            if($params['position'] == 4){
                $dataInfo['dataInfo']['lower']['1'] = $dataArray;
            }


            $result = $dataInfo;


        }

        $jsonDataInfo = json_encode($dataInfo);


        $dirname = dirname(__FILE__);

        $path = trim($dirname, 'controller');

        $file = fopen($path . "/loe/loeproducts.json", "w");

        fwrite($file, $jsonDataInfo . PHP_EOL);

        fclose($file);
        
        
        $fileSave = file_get_contents($_SERVER["HTTP_REFERER"] . "loe/");
        
        $Querys = new Querys();
        
        $paramsBanner['name'] = 'NewsletterLOE';
        
        $Banner = $Querys->EnterpriseBannerByName($paramsBanner);
        
        $paramsBannerContent['id'] = $Banner->getBannerId();
        
        $BannerContent = $Querys->EnterpriseBannerContentById($paramsBannerContent);
        
        $BannerContent->setBannerContent($fileSave);
        $BannerContent->save();

        return $result;
    }


}