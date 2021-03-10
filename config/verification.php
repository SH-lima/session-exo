<?php

require "fonction.php";
if (isset($_POST['newUser']) &&  isset($_POST['Newpassword']) && isset($_POST['Confirmpassword'])){
    $newUser = $_POST['newUser'];
    $Newpassword = $_POST['Newpassword'];
    $confirmPassword = $_POST['Confirmpassword'];

    if($Newpassword !== $confirmPassword ){
        $error ="Attention, le mot de passe n'est pas le même. ";
    }else{
        $error="";
        $message = "vous êtes inscrit ";
        $passwordhash = password_hash($Newpassword, PASSWORD_BCRYPT);
        insert_info($newUser, $passwordhash);  
    }
}
