<?php

include_once("header.php");
include_once("connection/users.php");

?>

<div id="main-container">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2>Gerenciar pedidos</h2>
            </div>
            <div class="col-md-12 table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#<span>ID</span></th>
                            <th scope="col">NOME</th>
                            <th scope="col">SENHA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listUsers as $user) : ?>
                            <tr>
                                <td><?php echo $user["id"] ?></td>
                                <td><?php echo $user["name"] ?></td>
                                <td><?php echo $user["password"] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>