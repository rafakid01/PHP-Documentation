<?php
include_once("header.php");
session_start();
if ((!isset($_SESSION['user'])) and (!isset($_SESSION['password']))) {
    header('location:index.php');
}

$logado = $_SESSION['user'];
?>

<body>
    <div class="container-sm">
        <div class="row">

            <div class="col-12">
                <nav class="nav-container d-flex justify-content-center">
                    <div class="col-3">HOME</div>
                    <div class="col-3">CONTACT</div>
                    <div class="col-3">MY ACCOUNT</div>
                </nav>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-sm-8">
                <table>
                    <tr>
                        <td>
                            <?php
                            echo " Bem vindo $logado";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>MENU AQUI</td>
                        <td>CONTEUDO E ICONES AQUI</td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>