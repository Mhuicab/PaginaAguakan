<?php
/**
*Clase de conexion a la DB
*/
class ConectarDB
{
  public static function ConexionDB()
  {
    $servername = 'localhost';
    $dbname = 'lecmed';
    $username = 'root';
    $password = '';

    try {
      $cn= new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Conexion exitosa a la DB. ".$dbname, " :)";
    } catch (PDOException $e) {
      echo "Fallo la conexion", $e->getMessage();
    }
    return  $cn;

  }
}



?>
