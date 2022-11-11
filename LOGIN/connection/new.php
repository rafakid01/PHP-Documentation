<?php

include_once("conn.php");

$method = $_SERVER["REQUEST_METHOD"];

$validacoes = [];

if ($method === "POST") {

    if (count($_POST) > 0) {
        if ($_POST["newUser"] === "") {
            $validacoes[] = "Por favor, preencha o nome de usuário";
        }

        if ($_POST["newPass"] === "") {
            $validacoes = "Por favor insira uma senha";
        }
    } else {

        $data = $_POST;
        
        $newUser = $data["newUser"];
        $newPass = $data["newPass"];
        
        $stmt = $conn->prepare("INSERT INTO users (name_user, pass_user) VALUES (:name_user, :pass_user)");
        
        $stmt->bindParam(":name_user", $newUser, PDO::PARAM_STR);
        $stmt->bindParam(":pass_user", $newPass, PDO::PARAM_INT);
        
        $stmt->execute();
        
        header("Location: ../index.php");
    }
}
