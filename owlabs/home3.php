<?php include('includes/header.php'); ?>
<?php require("includes/conexao.php"); ?>

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
    ?>
    <!-- Image and text -->
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
                <?php
                if (isset($_GET['msg'])) {

                    if ($_GET['msg'] == "salvo") {
                        echo "<div class='alert alert-success' id='mensagem-externa'>
                                    Livro salvo com sucesso!
                                </div>";
                    }
                    if ($_GET['msg'] == "edit") {
                        echo "<div class='alert alert-info' id='mensagem-externa'>
                                    Livro editado com sucesso!
                                </div>";
                    }
                }

                ?>
                <div class="offset-md-10 col-md-2">
                    <a href="cadastro-livros.php?usr=<?php echo $novoEmail ?>">
                        <button class="btn btn-info col-md-12">
                            <i class="fas fa-trash"></i>
                            + Novo livro
                        </button>
                    </a>
                </div>
                <table class="table table-bordered" id="table-categorias" widht="100%" cellspacing="0">
                    <thead>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM livros";
                        $resultado = mysqli_query($conexao, $sql);

                        while ($row = mysqli_fetch_assoc($resultado)) {
                            $id = $row['idLivros'];
                            $idUsr = $row['idUsuario'];
                            $link = $row['linkImagem'];
                            $titulo = $row['titulo'];
                            $autor = $row['autor'];
                            if ($idUsr == $idUsuario) {
                        ?>
                                <tr class="centro">
                                    <td><img src="<?php echo $link ?>" style="width: 80px; height: 120px; object-fit: cover;">
                                    </td>
                                    <td><?php echo $titulo ?></td>
                                    <td><?php echo $autor ?></td>

                                    <td>
                                        <a href="ver-resumo.php?id=<?php echo $id ?>&usr=<?php echo $novoEmail ?>">
                                            <button class="btn btn-success col-sm-12 col-xs-12 col-md-12">
                                                <i class="fas fa-edit"></i>
                                                Visualizar Resumo
                                            </button></a><br>
                                        </br><a href="editar-resumo.php?id=<?php echo $id ?>&usr=<?php echo $novoEmail ?>">
                                            <button class="btn btn-info col-sm-5 col-xs-5 col-md-5">
                                                <i class="fas fa-edit"></i>
                                                Editar
                                            </button></a>-
                                        <a href="actions/resumos/excluir-resumo.php?id=<?php echo $id ?>&usr=<?php echo $novoEmail ?>">
                                            <button class="btn btn-danger col-md-6">
                                                <i class="fas fa-trash"></i>
                                                Excluir
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>

                </table>


            </div>
        </div>
    </div>
</body>

</html>