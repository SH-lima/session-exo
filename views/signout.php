<?php
require "./config/fonction.php";

is_connected();
unset($_SESSION['admin']);

header('Location: /index.php?page=home');