<?php
if(!isset($_SESSION["k_username"])){
	session_start();
}

(isset($_REQUEST["username"]))? $user = $_REQUEST["username"]: $user = "";
(isset($_REQUEST["password"]))? $password = $_REQUEST["password"]: $password = "";
(isset($_REQUEST["destroy"]))? $destroy = $_REQUEST["destroy"]: $destroy = "";

if($destroy == 'destroy'){
	$_SESSION["k_username"] = "";
	session_destroy();
}

require_once './classes.php';

$urlpost = explode('/', $_SERVER['REQUEST_URI']);

$toPost = array('sendxmlsell', 'sendpay', 'funtt', 'encode');

if(in_array($urlpost[2] , $toPost) && isset($_SESSION["k_username"]) && !empty($_SESSION["k_username"])){
	getRoute()->run();
}else{
?>
<!DOCTYPE html>
<html lang="es">	

<?php

// pr5345$# - 171d02c12592f4967ef5a4dd1522e69b
// $userLogin = UserAclQuery::create()->filterByUser($user)->findOne();



if(trim($user) == 'admin' && md5(trim($password)) == '171d02c12592f4967ef5a4dd1522e69b'){
	$_SESSION["k_username"] = $user;
}

require_once './views/head.php';
?>
<body>
	<?php
	if(isset($_SESSION["k_username"]) && !empty($_SESSION["k_username"])){
		require_once './views/header.php';
		?>

		<div class="container-fluid">
			<div class="row-fluid">
				<?php

				require_once './views/menu.php';
				?>
				<div id="content" class="span10">
					<h1>Administrador Ing QBC</h1>

					<?php
					getRoute()->run();

					?>

				</div>

				<?php }else{ 

					require_once './views/login.php';

				} ?>
			</div>
		</div>

		<script type="text/javascript">
            
		var $form = $('form#sendpay');
	$('input#summit', $form).on('click', function(e){
		e.preventDefault();
		var params = {
			'idcampaign': $('input#idcampaign').val(),
			'paliado': $('input#paliado').val(),
			'pcam': $('input#pcam').val(),
			'send' : $('input#send').val()
		};
		//console.log(params);
		$().getFuntions({'params':params, 'class':'sendpay'});
	});

		</script>
    
        

	</body>
<?php } ?>