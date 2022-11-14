<?php

include_once("new.php");

$validation = "";

if (isset($_SESSION["msg"])) {
    $validation = $_SESSION["msg"];
    $status = $_SESSION["status"];

    $_SESSION["msg"] = "";
    $_SESSION["status"] = "";
}