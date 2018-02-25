<?php
/**
*Clase de conexion a la DB
*/
class ConectarDB
{
  public static function ConexionDB()
  {
    
    $username = 'APP';
    $password = 'APP';


    try {
      $cn= new PDO("oci:dbname=".$tns, $username, $password);
      $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Conexion exitosa a la DB. ".$dbname, " :)";
    } catch (PDOException $e) {
      echo "Fallo la conexion ", $e->getMessage();
    }
    return  $cn;

  }
}



?>
