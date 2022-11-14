<?php

include_once("conn.php");

$cadQuery = $conn->query("SELECT * FROM users");
$cad = $cadQuery->fetchAll();

$listUsers = [];

foreach($cad as $cadUni) {
    $user = [];

    $user["id"] = $cadUni["id_user"];
    $user["name"] = $cadUni["name_user"];
    $user["password"] = $cadUni["pass_user"];

    // RESGATANDO O USUÁRIO
    $userQuery = $conn->prepare("SELECT * FROM users WHERE id_user = :id_user");

    $userQuery->bindParam(":id_user", $user["id"]);

    $userQuery->execute();

    $userData = $userQuery->fetch(PDO::FETCH_ASSOC);

    array_push($listUsers, $user);
}