<?php

include_once("conn.php");

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {

    $data = $_POST;

    $newUser = ucfirst($data["newUser"]);
    $newPass = $data["newPass"];

    if (strlen($newPass) >= 8 && strlen($newUser) > 3) {
        $stmt = $conn->prepare("INSERT INTO users (name_user, pass_user) VALUES (:name_user, :pass_user)");

        $stmt->bindParam(":name_user", $newUser, PDO::PARAM_STR);
        $stmt->bindParam(":pass_user", $newPass, PDO::PARAM_INT);

        $stmt->execute();

        $_SESSION["msg"] = "Usuário adicionado com sucesso";
        $_SESSION["status"] = "success";

        header("Location: ../index.php");
    } else {
        $_SESSION["msg"] = "Seu nome de usuário deve ter ao menos 3 caracteres e sua senha 8 caracteres";
        $_SESSION["status"] = "warning";

        header("Location: ../new-cad.php");
    }
}
