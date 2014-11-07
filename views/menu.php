<?php 
$user = 'Usuario';

if(isset($_SESSION["k_username"]) && !empty($_SESSION["k_username"]))
    $user = $_SESSION["k_username"];
?>
<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Back QBC</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="menunav">
                <li class="active"><a href="./"><i class="glyphicon glyphicon-th"></i> Dashboard</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="./aliados">
                        <i class="glyphicon glyphicon-shopping-cart"></i> Ventas <span class="caret"></span>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="./ventas-cambio-id"><i class="glyphicon glyphicon-retweet"></i> Cambiar Ids Ventas</a></li>
                        <li><a href="./ventas-fallidas"><i class="glyphicon glyphicon-random"></i> Reenviar ventas fallidas</a></li>
                        <li><a href="./ventas-xml"><i class="glyphicon glyphicon-align-justify"></i> Edición XML</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Otras opciones</li>
                        <li><a href="./ventas-revertir"><i class="glyphicon glyphicon-resize-small"></i> Revertir Ventas Fallidas</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-gift"></i> Ventas con descuento</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="glyphicon glyphicon-briefcase"></i> Pago Aliado <span class="caret"></span>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="./aliados-enviarpago"><i class="glyphicon glyphicon-briefcase"></i> Enviar petición</a></li>
                        <li><a href="./deletepay"><i class="glyphicon glyphicon-trash"></i> Elimiar petición</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="glyphicon glyphicon-folder-close"></i> Cierre Oferta <span class="caret"></span>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="./cierre-oferta"><i class="glyphicon glyphicon-folder-close"></i> Enviar Cierre </a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Procesos alternos</li>
                        <li><a href="./cierre-compensacion"><i class="glyphicon glyphicon-adjust"></i> Compensación </a></li>
                    </ul>
                </li>
                <li><a href="#about">Generar XML</a></li>
                <li><a href="#contact">Contactos</a></li>
                <li class="dropdown" style="float:rigth;">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php print $user; ?> <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Acciones</a></li>
                        <li><a href="#">Configuración</a></li>
                        <li class="divider"></li>
                        <li><a href="./destroy">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>