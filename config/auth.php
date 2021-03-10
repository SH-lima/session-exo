<?php

require "fonction.php";
if(isset($_POST["login"]) && isset($_POST["password"])){
   $array_user = read($_POST["login"]);

   if (password_verify($_POST["password"], $array_user["pass_word"])){
      session_start();
      $_SESSION["admin"]= $_POST["login"];
      header('LOCATION: /index.php?page=dashboard');
   }else{
      $error = "Mot de passe ou identifiant invalident";
   }
}






  


