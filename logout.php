<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["username"]);

echo 'You have cleaned session';
header('Refresh: 0; URL = ./index.php');
