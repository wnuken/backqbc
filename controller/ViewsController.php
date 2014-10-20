
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

	static public function changeid(){
		include './views/changeid.php';
	}

	static public function vfallidas(){
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
	

	
}