<?php
//require_once 'Model\Consultas.php';
require_once 'Model\Breadcrumbs.php';

// $Consul = new Consulta_Model();
// $listUser=$Consul->get_User();

$BC = new Bcrumbs();
$crumbs= $BC->breadcrumb();

//require_once 'View/Login.php';
require_once 'View/Home.php';
 ?>
