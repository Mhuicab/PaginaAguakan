<?php

/**
 * Clase para la renderizacion de las vistas
 */
class Response
{

  private function __construct()
  {
    # code...
  }

  public static function render($viewName)
  {
    require APP_PATH. "View/".$viewName.".php";
  }
}


 ?>
