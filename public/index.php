<?php

chdir(dirname(__DIR__));


define("SYS_PATH", "lib/");
define("APP_PATH", "App/");

require SYS_PATH. "Router.php";
require APP_PATH. "http/Rutas.php";
require SYS_PATH. "Response.php";

$url = isset($_GET['url']) ? $_GET['url'] : '';

try {

  $accion = Router::getAction($url);

  $controllerName = $accion["controller"];
  $metodo = $accion["metodo"];

  require APP_PATH. "Controller/".$controllerName.".php";

  $controller = new $controllerName();

  $controller->$metodo();

} catch (Exception $e) {
  echo $e->getMessage();
}
