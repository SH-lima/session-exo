<?php
require "./config/fonction.php";

if(!is_connected()){
    header('LOCATION: /index.php?page=login');
    exit();
}

?>
<h2>bonjour <?php echo $_SESSION['admin']; ?></h2>
<h1>Ceci est mon dashboard</h1>