<?php
 /**
  *
  */
 class MainController
 {

   public function index()
   {

     Response::render("Login");

   }

   public function lectu()
   {
     require_once 'Controller/ControllerLectu.php';
   }

 }



 ?>
