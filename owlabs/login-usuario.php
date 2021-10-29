<?php include('includes/header2.php'); ?>

<body>
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="offset-md-1 col-md-10 corpo">
                    <br>
                    <h2>Login</h2><br>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == "salvo") {
                            echo "<div class='alert alert-success' id='mensagem-externa'>
                                    Usuário salvo com sucesso!
                                    Faça o seu login.
                                </div>";
                        }
                        if ($_GET['msg'] == "erro") {
                            echo "<div class='alert alert-danger' id='mensagem-externa'>
                                    Dados inválidos!
                                </div>";
                        }
                    }
                    ?>
                    <div class="col-md-12" id="retorno-login" hidden></div>
                    <form method="POST" action="actions/usuarios/login.php" id="form-login" onsubmit="return false">
                        <div class="form-group">
                            <div class="col-md-12 corpo">
                                <label class="form-label letraGrande" id="labelEmail">Email:</label>
                                <input type="email" class="form-control form-control-user" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 corpo">
                                <label class="form-label letraGrande" id="labelSenha">Senha:</label>
                                <input type="password" class="form-control form-control-user" id="senha" name="senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-3 col-md-6 corpo">
                                <br><input onclick="validarLogin()" type="submit" value="Logar" class="btn btn-outline-light col-sm-12 col-xs-12 col-md-12" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>