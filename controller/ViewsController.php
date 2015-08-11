
<?php
/*
* author: Brisan
* app: backQBC
*/

class Views {
    static public function home(){

        $Settings = new Settings();

        if($_SESSION["k_rol"] == 1){
            $paramsMaster  = array(
                'server' => SERVER_DB_QBC_MASTER,
                'user' => USER_DB_QBC_MASTER,
                'password' => PASS_DB_QBC_MASTER,
                'database' => DB_QBC_MASTER
                );

            $paramsSlave  = array(
                'server' => SERVER_DB_QBC_SLAVE,
                'user' => USER_DB_QBC_SLAVE,
                'password' => PASS_DB_QBC_SLAVE,
                'database' => DB_QBC_SLAVE
                );


            $mysqliConectionMaster = $Settings->mysqliConection($paramsMaster);
            $mysqliConectionSlave = $Settings->mysqliConection($paramsSlave);

            $ProcessMaster = $Settings->processList($mysqliConectionMaster);           
            $ProcessSlave = $Settings->processList($mysqliConectionSlave);

            $MasterStatus = $Settings->showMasterStatus($mysqliConectionMaster);
            $SlaveStatus = $Settings->showSlaveStatus($mysqliConectionSlave);

            $TotalSell = $Settings->showTotalSell(date('Y-m-d'));

            $idPetition = $Settings->getIdPeticion();
     
            include './views/home/index.php';

            $mysqliConectionMaster->close();
            $mysqliConectionSlave->close();

        }else{
            include './views/home-1.php';
        }

        
    }

    static public function idPetition(){
        $Settings = new Settings();
        $result = $Settings->getIdPeticion();
        print($result);
    }

    static public function TotalVentas(){
        $Settings = new Settings();
        $params = $_REQUEST['date'];
        $result = $Settings->showTotalSell($params);
        print($result);
    }

    static public function Sells(){
        include './views/sells/index.php';
    }

    static public function Credits(){
        include './views/credits/index.php';
    }

    static public function creditsend(){
        $General = new General();
        $result = $General->CreditClose($_REQUEST);
        include './views/credits/response.php';
    }

    static public function Dealers(){
        $Querys = new Querys();
        $params['status'] = 0;
        $result = $Querys->QbcSciManualCloseQueryByCampaigns($params);
        include './views/dealers/index.php';
    }

    /*static public function ventas(){
		include './views/ventas.php';
	}*/

    static public function ventasCambioId(){
        include './views/changeid.php';
    }

    static public function fallidas(){
        include './views/vfallidas.php';
    }

    static public function vfallidas(){
        $General = new General();
        $result = $General->vfallidas($_REQUEST);

        if($result['status'] == 'ok'){
            print '<pre style="display:none;">'; $resultJson = system($result['message']); print '</pre>';
            include './views/resultvfallidas.php';
        }else{
            print '<pre>'; print_r($result); print '</pre>';
        }

    }

    static public function ventasxml(){
        include './views/ventasxml.php';
    }

    static public function revertir(){
        //include './views/ventasxml.php';
        print "Reversion de ventas";
    }

    static public function sendxmlsell(){
        $General = new General();
        $result = $General->sendxmlsell($_REQUEST);
        //printf ("<pre>%s</pre>", $result);
        print '<pre>'; print_r($result); print '</pre>';
    }

    static public function descuento(){
        include './views/vdescuento.php';
    }

    static public function sendselldiscount(){
        $General = new General();
        $result = $General->sendSellDiscount($_REQUEST);
        //printf ("<pre>%s</pre>", $result);
        print '<pre>'; print_r($result); print '</pre>';
    }




    /*static public function aliados(){
		include './views/aliados.php';
	}*/

    static public function trypay(){
        $General = new General();
        $result = $General->tryPay($_REQUEST);
        $totalForPage = ceil($result->getNbResults() / 20);
        $totalPages = $result->getLinks($totalForPage);
        $currentPage = trim($result->haveToPaginate());
        include './views/trypay.php';
    }

    static public function enviarpago(){
        include './views/sendpay.php';
    }

    static public function sendpay(){
        $General = new General();
        $result = $General->PagoAliado($_REQUEST);
        include './views/resultpay.php';
    }

    static public function sendpayxml(){
        $General = new General();
        $result = $General->PagoAlidoXML($_REQUEST);
        include './views/resultpay.php';
    }

    static public function destroy(){
        include './views/destroy.php';
    }

    static public function cierreoferta(){
        $Querys = new Querys();
        $params['status'] = 0;
        $result = $Querys->QbcSciManualCloseQueryByCampaigns($params);        
        include './views/cierreoferta.php';
    }

    static public function cierrecompensacion(){
        $General = new General();
        $result = $General->ListClosure($_REQUEST);
        include './views/cierrecompensacion.php';
    }

    static public function closuresend(){
        $General = new General();
        $result = $General->ClosureOffer($_REQUEST);        
        include './views/resultcierre.php';
    }

    static public function conpensationsend(){
        $General = new General();
        $result = $General->ConpensationOffer($_REQUEST);        
        include './views/resultcierre.php';
    }

    static public function devolucionesxml(){
        include './views/devolucionesxml.php';
    }

    static public function sendxmldev(){
        $General = new General();
        $result = $General->sendxmldev($_REQUEST);
        //printf ("<pre>%s</pre>", $result);
        //print '<textarea>'; print_r($result); print '</textarea>';
        print '<pre>'; print_r($result); print '</pre>';
    }

    static public function pancartasext(){
        include './views/pancartasext.php';
    }

    static public function pancartacons(){
        $General = new General();
        $result = $General->pancartaCons($_REQUEST);

        var_dump($result);
        // include './views/pancartacons.php';
    }

    static public function newsloe(){
        $General = new General();
        $result = $General->newsloe($_REQUEST);
        // include './views/resultnewsloe.php';
        print '<pre>'; print_r($result); print '</pre>';
    }

    static public function newsletter(){
        include './views/newsloe.php';
    }

    static public function saveimageblock(){
        $General = new General();
        $result = $General->saveImageBlock($_REQUEST);
        var_dump($result);
    }
    
    static public function loePreview(){
        $result = $_REQUEST;        
        include './views/newsletter/previewloe.php';         
    }
}