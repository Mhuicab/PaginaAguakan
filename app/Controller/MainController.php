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

   public function home()
   {
     Response::render("Home");
   }

 }



 ?>
