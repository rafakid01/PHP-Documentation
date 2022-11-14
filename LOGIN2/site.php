<?php
include_once("header.php");

if (!isset($_SESSION['user']) && !isset($_SESSION['password'])) {
    header("Location: index.php");
}

$actualUser = $_SESSION['user'];

echo "Bem vindo $actualUser";