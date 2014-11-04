
<?php
/*
* author: Brisan
* app: backQBC
*/

class Views {
	static public function home(){
		include './views/home.php';
	}

	static public function ventas(){
		include './views/ventas.php';
	}

	static public function ventasCambioId(){
		include './views/changeid.php';
	}

	static public function fallidas(){
		include './views/vfallidas.php';
	}

	static public function ventasxml(){
		include './views/ventasxml.php';
	}

	static public function sendxmlsell(){
		$General = new General();
		$result = $General->sendxmlsell($_REQUEST);
		//printf ("<pre>%s</pre>", $result);
		print '<pre>'; print_r($result); print '</pre>';
	}

	static public function aliados(){
		include './views/aliados.php';
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
	

	
}