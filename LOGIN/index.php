<?php
include("header.php");

?>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="cad.php" id="formlogin" name="formlogin">
                            <fieldset id="fie">
                                <legend class="d-flex justify-content-center mt-3 mb-3"><h4>LOGIN</h4></legend>
                                <label class="form-label mt-4">NOME : </label>
                                <input class="form-control" type="text" name="login" id="login" />
                                <label class="form-label mt-4">SENHA :</label>
                                <input class="form-control" type="password" name="senha" id="senha" />
                                <input class="form-control btn btn-success  mt-4" type="submit" value="LOGAR  " />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>