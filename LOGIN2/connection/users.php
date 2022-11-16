<?php

include_once("conn.php");

$cadQuery = $conn->query("SELECT * FROM users");
$cad = $cadQuery->fetchAll();

$listUsers = [];

foreach ($cad as $cadUni) {
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

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $type = $_POST["type"];

    // DELETANDO USUÁRIO
    if ($type == "delete") {
        $userId = $_POST["id"];

        $deleteQuery = $conn->prepare("DELETE FROM users WHERE id_user = :id_user");

        $deleteQuery->bindParam(":id_user", $userId, PDO::PARAM_INT);

        $deleteQuery->execute();

        $_SESSION["msg"] = "Usuário removido com successo";
        $_SESSION["status"] = "success";
    }

    header("Location: ../dashboard.php");
}
