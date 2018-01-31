<?php
/**
 * Creacon del Login
 */
class LoginModel
{
  private $db;

  function __construct()
  {
      require_once 'Model/ConexionDB.php';

      $this->db= ConectarDB::ConexionDB();
  }

  public function login(){

    //$sqlLog=$this->db->query("SELECT  * FROM `usuarioweb` WHERE `Usuario` = ?");

  }
}


 ?>
