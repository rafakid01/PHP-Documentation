<?php
include_once("header.php");
include_once("connection/msg-status.php");

?>

<div class="container-sm">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="connection/new.php" id="formcad" name="formcad">
                        <fieldset id="field">
                            <legend class="d-flex mt-3 mb-3 new-cad-legend">
                                <a href="index.php">Voltar</a>
                                <h4>LOGIN</h4>
                            </legend>
                            <label class="form-label mt-4">NOME : </label>
                            <input class="form-control" type="text" require name="newUser" id="newUser" />

                            <label class="form-label mt-4">SENHA :</label>
                            <div class="row">

                                <div class="col-11">
                                    <input class="form-control" type="password" name="newPass" id="newPass" />
                                </div>
                                <div class="col-1 d-flex p-0">
                                    <i class="bi bi-eye d-flex align-items-center"></i>
                                </div>
                            </div>
                            <input class="form-control btn btn-primary  mt-4" type="submit" value="CADASTRAR" />
                            <?php if ($validation != "") : ?>
                                <div class=" mt-5 alert alert-<?= $status ?>">
                                    <p class="text-center"><?= $validation ?></p>
                                </div>
                            <?php endif ?>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>