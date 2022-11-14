<?php

include_once("header.php");
include_once("connection/msg-status.php");

?>

<div class="container-sm">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="connection/cad.php" id="formlogin" name="formlogin">
                        <fieldset id="fie">
                            <legend class="d-flex justify-content-center mt-3 mb-3">
                                <h4>LOGIN</h4>
                            </legend>
                            <label class="form-label mt-4">NOME : </label>
                            <input class="form-control" type="text" name="user" id="user" />
                            <label class="form-label mt-4">SENHA :</label>
                            <div class="row">
                                <div class="col-11">
                                    <input class="form-control" type="text" name="senha" id="senha" />
                                </div>
                                <div class="col-1 d-flex p-0">
                                    <i class="bi bi-eye d-flex align-items-center"></i>
                                </div>
                            </div>
                            <input class="form-control btn btn-success  mt-4" type="submit" value="LOGAR  " />
                        </fieldset>
                    </form>
                    <div class="row">
                        <div class="mt-3 alert alert-<?= $status ?>">
                            <p class="text-center">
                                <?= $validation ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-1 link-container">
                            <a href="new-cad.php" class="cad-link">
                                Ainda não possui cadastro? Clique aqui
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>