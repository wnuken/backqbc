<?php
require_once './classes.php';
// pr5345$# - 171d02c12592f4967ef5a4dd1522e69b
// $userLogin = UserAclQuery::create()->filterByUser($user)->findOne();
if(trim($user) == 'admin' && md5(trim($password)) == '171d02c12592f4967ef5a4dd1522e69b'){
    $_SESSION["k_username"] = $user;
}
if(isset($_SESSION["k_username"]) && !empty($_SESSION["k_username"])){
    $urlpost = explode('/', $_SERVER['REQUEST_URI']);
    $toPost = array('sendxmlsell', 'sendpay', 'funtt', 'encode');
    
    if(in_array($urlpost[2] , $toPost)){
        getRoute()->run();
    }else{    
        require_once('./views/general.php');
    }
    
}else{
    require_once './views/login.php';
}
?>