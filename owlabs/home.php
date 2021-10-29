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
            </div>
        </div>
        <div class="row">
            <div class="offset-md-10 col-md-2">
                <a href="cadastro-livros.php?usr=<?php echo $novoEmail ?>">
                    <button class="btn btn-info col-md-12">
                        <i class="fas fa-trash"></i>
                        + Novo livro
                    </button>
                </a>
            </div>
        </div>
        <div class="row" style="display: flex; justify-content: center;">

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

                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src="<?php echo $link ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"><?php echo $titulo ?></h5>
                            <p class="card-text" style="text-align: center;"><?php echo $autor ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="ver-resumo.php?id=<?php echo $id ?>&usr=<?php echo $novoEmail ?>" class="btn btn-primary">Ver Resumo</a>
                        </div>
                    </div>

            <?php }
            } ?>


        </div><br>
    </div>


</body>

</html>