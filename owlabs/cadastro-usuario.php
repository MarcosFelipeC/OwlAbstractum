<?php include('includes/header2.php'); ?>

<body>
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="offset-md-1 col-md-10 corpo">
                    <br>
                    <h2>Cadastro de Usuário</h2>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == "erro") {
                            echo "<div class='alert alert-danger' id='mensagem-externa'>
                                    O usuário já existe!
                                </div>";
                        }
                    }
                    ?><br>
                    <div class="col-md-12" id="retorno-cadastro" hidden></div>
                    <form method="POST" action="actions/usuarios/salvar-usuario.php" id="form-cadastro-usuario" onsubmit="return false">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="form-label letraGrande" id="labelNome">Nome:</label>
                                <input type="text" class="form-control form-control-user" id="nome" name="nome">
                            </div>
                        </div>
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
                                <br><input onclick="validarCadastroUsuario()" type="submit" value="Salvar Usuário" class="btn btn-outline-light col-sm-12 col-xs-12 col-md-12" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>