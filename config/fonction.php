<?php
if(!function_exists("create_table")){
 
    function create_table($connection):string
    {
        $new_table = $connection->prepare('CREATE TABLE users
        (
            id INT PRIMARY KEY AUTO_INCREMENT ,
            username VARCHAR(255) NOT NULL,
            pass_word VARCHAR(255) NOT NULL
        )');
        $done = $new_table->execute(); 
        if(!$done){
            echo "echec";
        }else{
            echo "done";
        }
}};   

if(!function_exists("insert_info")){
    function insert_info(string $newuser, string $newpassword):void
    {  
        require "connection.php";
        $pdoState = $connection->prepare('INSERT INTO users (username, pass_word) VALUES (:username, :pass)');
        $pdoState->bindvalue(':username', $newuser, PDO::PARAM_STR );
        $pdoState->bindvalue(':pass',  $newpassword, PDO::PARAM_STR );
        $executeDone = $pdoState->execute();
        if(!$executeDone){
            create_table($connection);
            $errer = "erreur"; 
        }  
    };    
}

if(!function_exists("is_connected")){
    function is_connected():bool
    {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
        return !empty($_SESSION['admin']);
    }
}

if(!function_exists("read")){
    function read(string $login):array
    {
        require "connection.php";
        $sql='SELECT * FROM users WHERE username = :user';
        $get_user=$connection->prepare($sql);
        $get_user->bindvalue(':user', $login, PDO::PARAM_STR);
        $get_user->execute();
        $response = $get_user->fetch(PDO::FETCH_ASSOC);
        return $response;
    }
}
