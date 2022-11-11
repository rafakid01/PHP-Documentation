<?php

include_once("conn.php");

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {

    $data = $_POST;

    $newUser = $data["newUser"];
    $newPass = $data["newPass"];

    $stmt = $conn->prepare("INSERT INTO users (name_user, pass_user) VALUES (:name_user, :pass_user)");

    $stmt->bindParam(":name_user", $newUser, PDO::PARAM_STR);
    $stmt->bindParam(":pass_user", $newPass, PDO::PARAM_INT);

    $stmt->execute();

    $_SESSION["msg"] = "Usuário adicionado com sucesso";
    $_SESSION["status"] = "success";

    header("Location: ../index.php");
}
