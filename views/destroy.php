<?php

if(isset($_SESSION["k_username"])){
    $_SESSION["k_username"] = "";
    session_destroy();
}
$newURL = "./";
header('Location: '.$newURL);

?>