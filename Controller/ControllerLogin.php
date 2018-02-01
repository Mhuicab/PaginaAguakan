<?php
require_once 'Model\LoginModel.php';
$login = new LoginModel();
$IS = $login -> login($Username, $pass);
require_once 'View\Login.php';
 ?>
