<?php
include_once("connection/new.php");

$msg = "";

if (isset($_SESSION["msg"])) {
    $msg = $_SESSION["msg"];
    $status = $_SESSION["status"];

    $_SESSION["msg"] = "";
    $_SESSION["status"] = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php if ($msg != "") : ?>
        <div class="container-sm alert alert-<?php echo $status ?>">
            <div class="row">
                <div class="col-ms-4">
                    <p><?php echo $msg ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>