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

  public function login($Username, $pass){

    try {
        $hash_password= hash('sha256', $pass);
        $sqlLog=$this->db->query("SELECT  Id FROM `usuarioweb` WHERE `Usuario` =:Username AND 'Password'=:hash_password");
        $sqlLog->blindParam("Username", $Username, PDO::PARAM_STR);
        $sqlLog->blindParam("hash_password", $hash_password, PDO::PARAM_STR);
        $sqlLog->execute();
        $count = $sqlLog->rowCount();
        $data=$sqlLog->fetch(PDO::FETCH_OBJ);
        $db=null;
        

    } catch (\Exception $e) {

    }

  }
}


 ?>
