<?php
require_once 'Model\ConexionDB.php';
/**
 *
 */
class Consulta_Model
{
  private $db;
  private $user;

  public function __construct()
  {


    $this->db=ConectarDB::ConexionDB();

    $this->user= array();

  }

  public function get_User(){
    $sql=$this->db->query ("SELECT * FROM `usuarioweb`");

    while ($filas=$sql->fetch(PDO::FETCH_ASSOC)) {
      $this->user[]=$filas;
    }
      return $this->user;
  }



}


?>
