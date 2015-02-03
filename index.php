<?php
require_once './classes.php';
// 19790603/Ab - 6e2b131b4ca3b2ff6aa3cbb7bf6711582766c7cb
// $userLogin = UserAclQuery::create()->filterByUser($user)->findOne();
if(trim($user) == 'admin' && sha1(trim($password)) == '6e2b131b4ca3b2ff6aa3cbb7bf6711582766c7cb'){
    $_SESSION["k_username"] = $user;
}
if(isset($_SESSION["k_username"]) && !empty($_SESSION["k_username"])){
    $urlpost = explode('/', $_SERVER['REQUEST_URI']);
    $classjson = file_get_contents(dirname(__FILE__) . '/config/postclass.json');
    $classarray = json_decode($classjson, true);

    if(in_array($urlpost[2] , $classarray['class'])){
        getRoute()->run();
    }else{
        require_once('./views/general.php');
    }

}else{    
    require_once './views/login.php';
}
?>