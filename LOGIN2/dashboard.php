<?php

include_once("header.php");
include_once("connection/users.php");

if ($_SESSION["user"] != "Admin" && $_SESSION["password"] != "senhaadm") {
    header("Location: index.php");
}

?>

<div id="main-container">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-1 text-center  mb-5">
                <button class="btn"><a href="site.php">Back</a></button>
            </div>
            <div class="col-md-11 text-center  mb-5">
                <h2>Gerenciar usuários</h2>
            </div>

            <div class="col-md-12 table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#<span>ID</span></th>
                            <th scope="col">NOME</th>
                            <th scope="col">SENHA</th>
                            <th scope="col">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listUsers as $user) : ?>
                            <tr>
                                <td><?php echo $user["id"] ?></td>
                                <td><?php echo $user["name"] ?></td>
                                <td><?php echo $user["password"] ?></td>
                                <td class="d-flex">
                                    <form action="" method="POST">
                                        <input type="hidden" name="type" value="edit">
                                        <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                                        <button class="btn" type="submit">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                    </form>
                                    <form action="" method="POST">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                                        <button class="btn" type="submit">
                                            <i class="bi bi-x"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>

</html>