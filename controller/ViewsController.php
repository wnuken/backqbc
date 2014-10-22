
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
        
	   //print '<textarea style="width:100%;height:300px;">' . (htmlentities($result['XML'])) . '</textarea>';
        printf ("<pre>%s</pre>", htmlentities($result['XML']));
        $result['XML'] = '';
        print '<pre>'; print_r($result); print '</pre>';
        
	}
	

	
}