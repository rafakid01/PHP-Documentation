<?php
include_once("conn.php");

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {

    $userName = $_GET["user"];
    $passNum = $_GET["senha"];

    // VERIFICANDO SE O NOME EXISTE
    $resultQuery = $conn->prepare("SELECT * FROM users WHERE name_user = :name_user AND pass_user = :pass_user");
    $resultQuery->bindParam(":name_user", $userName);
    $resultQuery->bindParam(":pass_user", $passNum);

    $resultQuery->execute();

    $result = $resultQuery->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        $_SESSION['user'] =  $userName;
        $_SESSION['password'] = $passNum;
        header("Location: ../site.php");
    } else {
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header("Location: ../index.php");
    }
}
