<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

if($page === 'home'){
    require './views/home.php';
}

if($page === 'dashboard'){
    require './views/dashboard.php';
}

if ($page === 'login') {
    require './views/login.php';
}
if ($page === 'signup') {
    require './views/signup.php';
}
if ($page === 'signout') {
    require './views/signout.php';
}