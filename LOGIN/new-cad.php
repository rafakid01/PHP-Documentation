<?php

include_once("header.php");

?>

<div class="container-sm">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="connection/new.php" id="formcad" name="formcad">
                        <fieldset id="fie">
                            <legend class="d-flex mt-3 mb-3 new-cad-legend">
                                <a href="index.php">Voltar</a>
                                <h4>LOGIN</h4>
                            </legend>
                            <label class="form-label mt-4">NOME : </label>
                            <input class="form-control" type="text" name="newUser" id="newUser" />
                            <label class="form-label mt-4">SENHA :</label>
                            <input class="form-control" type="password" name="newPass" id="newPass" />
                            <input class="form-control btn btn-primary  mt-4" type="submit" value="CADASTRAR" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>