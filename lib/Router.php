<?php

/**
 * clase para las rutas
 */
class Router
{
  private  static $routes = [];

  private function __construct() {}



  public static function add($ruta, $controller, $metodo)
  {
    static::$routes[$ruta] = ["controller" => $controller, "metodo" => $metodo];
  }


  public static function getAction($ruta)
  {
    if (array_key_exists($ruta, static::$routes)) {
      return static::$routes[$ruta];
    }
    else {
      throw new Exception("La ruta '$ruta' no fue encontrada");

    }
  }

}
