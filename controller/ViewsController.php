
<?php
/*
* author: Brisan
* app: backQBC
*/

class Views {
	static public function home(){
		include './views/home.php';
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
		print '<pre>'; print_r($result); print '</pre>';
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

	/*static public function aliados(){
		include './views/aliados.php';
	}*/
    
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
}