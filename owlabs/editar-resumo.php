<?php include('includes/header.php'); ?>
<?php require('includes/conexao.php') ?>

<body>
<?php
    if (isset($_GET['usr'])) {
        $sql2 = "SELECT * FROM usuarios";
        $resultado2 = mysqli_query($conexao, $sql2);
        while ($row = mysqli_fetch_assoc($resultado2)) {
            $email = md5($row['email']);
            if ($_GET['usr'] == $email) {
                $idUsuario = $row['id'];
                $novoEmail = $email;
                $nomeUsuario = $row['nome'];
            }
            
        }
    }
    if (isset($_GET['id'])) {
        $livroID = $_GET['id'];
        $sql = "SELECT * FROM livros WHERE idLivros = '$livroID'";

        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_assoc($resultado)) {
            $id = $row['idLivros'];
            $titulo = $row['titulo'];
            $autor = $row['autor'];
            $link = $row['linkImagem'];
            $personagens = $row['personagens'];
            $resumo = $row['resumo'];
            $analiseObra = $row['analiseObra'];
        }
    }
    ?>
    <nav class="navbar">

        <a class="navbar-brand" href="">
            <img src="assets/img/bookshelf.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Owl Abstractum
            </div>

        </a>

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="actions/usuarios/logout.php"><?php echo $nomeUsuario ?></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="actions/usuarios/logout.php" style="text-align: center;">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container">


        <div class="row">
            <div class="offset-md-1 col-md-10 corpo">
                <br>
                <h2>Editor de Resumo</h2><br>
                <div class="col-md-12" id="retorno-cadastro" hidden></div>
                <form method="POST" action="actions/resumos/editar-resumo.php" id="form-cadastro-resumo" onsubmit="return false">
                    <div class="form-group">
                        <div class="col-md-12" hidden>
                            <label class="form-label letraGrande" id="labelUser" name="labelTitulo">ID:</label>
                            <input type="text" class="form-control form-control-user" id="idUsuario" name="idUsuario" value=<?php echo "$idUsuario" ?>>
                            <input type="text" class="form-control form-control-user" id="email" name="email" value=<?php echo "$novoEmail" ?>>
                            <input type="text" class="form-control form-control-user" id="id" name="id" value=<?php echo "$id" ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="form-label letraGrande" id="labelTitulo" name="labelTitulo">T??tulo:</label>
                            <input value="<?php echo $titulo?>" type="text" class="form-control form-control-user" id="titulo" name="titulo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 corpo">
                            <label class="form-label letraGrande" id="labelAutor">Autor:</label>
                            <input value="<?php echo $autor?>" type="text" class="form-control form-control-user" id="autor" name="autor">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 corpo">
                            <label class="form-label letraGrande" id="labelLink">Link da Imagem:</label>
                            <input value="<?php echo $link?>" type="text" class="form-control form-control-user" id="link" name="link">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 corpo">
                            <label class="form-label letraGrande" id="labelPersonagens">Personagens:</label>
                            <textarea class="form-control form-control-user" name="personagens" id="personagens" rows="2"><?php echo $personagens?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 corpo">
                            <label class="form-label letraGrande" id="labelResumo">Resumo:</label>
                            <textarea class="form-control form-control-user" name="resumo" id="resumo" rows="4"><?php echo $resumo?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 corpo">
                            <label class="form-label letraGrande" id="labelAnalise">An??lise da obra:</label>
                            <textarea class="form-control form-control-user" name="analise" id="analise" rows="4"><?php echo $analiseObra?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-3 col-md-6 corpo">
                            <br><input onclick="validarCadastroResumo()" type="submit" value="Salvar Edi????o" class="btn btn-info col-sm-12 col-xs-12 col-md-12" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>