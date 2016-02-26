<?php 
/*
* author: Brisan
* app: backQBC
*/

class Proccess {
	var $exception = 'Caught exception: ';
    var $webService = QBC_SOAP_SERVER;
    var $options = array(
        'cache_wsdl'=> WSDL_CACHE_NONE
        );

     // ********* GENERAR CIERRE OFERTA COMPESAR **********

    public function & ClosureOffer(&$params){

        $wsResult = array();
        $peticionDTO = array();
        $PeticionId = md5(strtotime('now') . $params['campaing_id']);
        $PeticionId = substr($PeticionId, 0, -8);
        $totalNeto = 0;
        $Querys = new Querys();
        $paramclose['id'] = $params['campaing_id'];
        $paramclose['status'] = $params['status'];
        $QbcSciManualCloseQuery = $Querys->QbcSciManualCloseQueryByCampaignId($paramclose);
        
        $keyV = 0;
        $keyD = 0;

        foreach($QbcSciManualCloseQuery as $key => $Closure){
            if($Closure->getType() == 1){
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Fecha'] = date("Y-m-d", strtotime($Closure->getDateSap()));
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Numero'] = $Closure->getDocSap();
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Posicion'] = "000001";
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Valor'] = $Closure->getValueSap();
                $totalNeto = $totalNeto + $Closure->getValueSap();

                /*$ValorCDevolucion = round($totalDev * $params['porcentaje_aliado'], 0);
                $ValorIVACDevolucion = round(($ValorCDevolucion * $params['tax_aliado']), 0);
                $ValorCxDEliado = $totalDev - ($ValorCDevolucion + $ValorIVACDevolucion);

                $totalNeto = $totalNeto - $ValorCxDEliado;*/


                $keyV++;
            }else{
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Fecha'] = date("Y-m-d", strtotime($Closure->getDateSap()));
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Numero'] = $Closure->getDocSap();
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Posicion'] = "000001";
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Valor'] = $Closure->getValueSap();
                $totalNeto = $totalNeto - $Closure->getValueSap();
                $keyD++;
            }
            
        }

        $GroupdealQuery = $Querys->GroupdealsById($paramclose);
        $paramsMerchan['id'] = $GroupdealQuery->getMerchantId();
        $GroupdealsMerchantsQuery = $Querys->GroupdealsMerchantsById($paramsMerchan);
        $peticionDTO['peticionDTO']['Campana']['CampanaId'] = $params['campaing_id'];
        $peticionDTO['peticionDTO']['Campana']['Detalle'] = utf8_encode($GroupdealQuery->getTitleMidium());
        $peticionDTO['peticionDTO']['Campana']['Nombre'] = utf8_encode($GroupdealQuery->getTitleShort());
        $peticionDTO['peticionDTO']['Contexto']['Aplicacion'] = 'CQBC';
        $peticionDTO['peticionDTO']['Contexto']['PeticionId'] = $PeticionId;
        $peticionDTO['peticionDTO']['Contexto']['Usuario'] = 'INGQBC';

        $peticionDTO['peticionDTO']['Fecha'] = date("Y-m-d");
        $peticionDTO['peticionDTO']['NitAliado'] = $GroupdealsMerchantsQuery->getNitNumber();
        $peticionDTO['peticionDTO']['NombreAliado'] = utf8_encode($GroupdealsMerchantsQuery->getLegalName());
        $peticionDTO['peticionDTO']['Valor'] = $totalNeto;

        if($params['send'] == 1 && isset($peticionDTO['peticionDTO']['Ventas'][0])){
            try {
                $client = new SoapClient($this->webService, $this->options);
            } catch (Exception $e) {
                $wsResult['error'] = $this->exception .  $e->getMessage() . "\n";
                return $wsResult;
            }
            $webService = $client->CierreOfertas($peticionDTO);
            $wsResult['wsResult'] = $webService->CierreOfertasResult;
            foreach($QbcSciManualCloseQuery as $key => $Closure){
                $Closure->setStatus(1);
                $Closure->save();
            }
            
            $salesDocuments = json_encode($peticionDTO['peticionDTO']['Ventas']);
            $OfferClosure = new QbcSciOfferClosure();
            $OfferClosure->setPetitionId($PeticionId);
            $OfferClosure->setMerchantId($paramsMerchan['id']);
            $OfferClosure->setCampaignId($params['campaing_id']);
            $OfferClosure->setSalesDocuments($salesDocuments);
            $OfferClosure->setDevolutionDocuments('');
            $OfferClosure->save();
            
        }

        $wsResult['peticionDTO'] = $peticionDTO['peticionDTO'];

        return $wsResult;
    }

      // ********* GENERAR PAGO  ALIADO OFERTA COMPESAR **********

    public function & PayOffer(&$params){

        $wsResult = array();
        $peticionDTO = array();
        $PeticionId = substr(md5(strtotime('now')), 0, 24);
        $totalNeto = 0;
        $Querys = new Querys();
        $paramclose['id'] = $params['campaing_id'];
        $paramclose['status'] = $params['status'];
        $QbcSciManualCloseQuery = $Querys->QbcSciManualCloseQueryByCampaignId($paramclose);
        // $Campania = GroupdealsQuery::create()->filterByGroupdealsId($params['campaing_id'])->findOne();
        $GroupdealsQuery = $Querys->GroupdealsById($paramclose);

        $PorcentajeComision = $GroupdealsQuery->getEtGain() / 100;
        $PorcentajeIVA = $params['campaing_tax'] / 100;
        $paramsMerchan['id'] = $GroupdealsQuery->getMerchantId();
        $GroupdealsMerchantsQuery = $Querys->GroupdealsMerchantsById($paramsMerchan);

        $TaxStatus = 'false';
        if($params['campaing_tax'] == 0)
            $TaxStatus = 'true';

        
        
        $keyV = 0;
        $keyD = 0;

        foreach($QbcSciManualCloseQuery as $key => $Closure){
            if($Closure->getType() == 1){
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Fecha'] = date("Y-m-d", strtotime($Closure->getDateSap()));
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Numero'] = $Closure->getDocSap();
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Posicion'] = "000001";
                $peticionDTO['peticionDTO']['Ventas'][$keyV]['Valor'] = $Closure->getValueSap();

                $totalNeto = $totalNeto + $Closure->getValueSap();
   
                $keyV++;
            }else{
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Fecha'] = date("Y-m-d", strtotime($Closure->getDateSap()));
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Numero'] = $Closure->getDocSap();
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Posicion'] = "000001";
                $peticionDTO['peticionDTO']['Devoluciones'][$keyD]['Valor'] = $Closure->getValueSap();
                $totalNeto = $totalNeto - $Closure->getValueSap();
                $keyD++;
            }
            
        }

        $totDevNo = 0;



        $peticionDTO['peticionDTO']['ValorComision'] = round($totalNeto * $PorcentajeComision);
        $peticionDTO['peticionDTO']['ValorIVAComision'] = round($peticionDTO['peticionDTO']['ValorComision'] * $PorcentajeIVA);
        $peticionDTO['peticionDTO']['ValorCxPAliado'] = $totalNeto - ($peticionDTO['peticionDTO']['ValorComision'] + $peticionDTO['peticionDTO']['ValorIVAComision'] + $totDevNo);

        // return $PorcentajeComision;

        $peticionDTO['peticionDTO']['Campana']['CampanaId'] = $params['campaing_id'];
        $peticionDTO['peticionDTO']['Campana']['Detalle'] = utf8_encode($GroupdealsQuery->getTitleMidium());
        $peticionDTO['peticionDTO']['Campana']['Nombre'] = utf8_encode($GroupdealsQuery->getTitleShort());
		
		$peticionDTO['peticionDTO']['Contexto']['Aplicacion'] = 'CQBC';
		$peticionDTO['peticionDTO']['Contexto']['PeticionId'] = $PeticionId;
		$peticionDTO['peticionDTO']['Contexto']['Usuario'] = 'INGQBC';

		$peticionDTO['peticionDTO']['Exento'] = $TaxStatus;
		$peticionDTO['peticionDTO']['Fecha'] = date("Y-m-d\TH:i:s");
		$peticionDTO['peticionDTO']['Moneda'] = $params['currency'];
		$peticionDTO['peticionDTO']['NitAliado'] = $GroupdealsMerchantsQuery->getNitNumber();
		$peticionDTO['peticionDTO']['Periodo'] = date('Y')-1 . date('-m-d') . ' ' . date('Y-m-d');
		$peticionDTO['peticionDTO']['PorcentajeComision'] = $PorcentajeComision;
		$peticionDTO['peticionDTO']['PorcentajeIVAComision'] = $PorcentajeIVA;
        

        if($params['send'] == 1 && isset($peticionDTO['peticionDTO']['Ventas'][0])){
            try {
                $client = new SoapClient($this->webService, $this->options);
            } catch (Exception $e) {
                $wsResult['error'] = $this->exception .  $e->getMessage() . "\n";
                return $wsResult;
            }

            $webService = $client-> PagosAliado($peticionDTO);
            $wsResult['wsResult'] = $webService->PagosAliadoResult;
            /*$webService = $client->CierreOfertas($peticionDTO);
            $wsResult['wsResult'] = $webService->CierreOfertasResult;*/
            foreach($QbcSciManualCloseQuery as $key => $Closure){
                $Closure->setStatus(1);
                $Closure->save();
            }
            
            $salesDocuments = json_encode($peticionDTO['peticionDTO']['Ventas']);
            $OfferClosure = new QbcSciOfferClosure();
            $OfferClosure->setPetitionId($PeticionId);
            $OfferClosure->setMerchantId($paramsMerchan['id']);
            $OfferClosure->setCampaignId($params['campaing_id']);
            $OfferClosure->setSalesDocuments($salesDocuments);
            $OfferClosure->setDevolutionDocuments('');
            $OfferClosure->save();
            
        }

        $wsResult['peticionDTO'] = $peticionDTO['peticionDTO'];

        return $wsResult;
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



}