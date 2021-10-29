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
                <h2>Seu Resumo</h2><br>
                <div class="card">
                    <div class="card-header">
                        <b><?php echo $titulo ?></b>, de
                        <i><?php echo $autor ?></i>
                    </div>

                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <img class="card-img-top" src="<?php echo $link ?>" alt="Card image cap">
                            <br><p style="text-shadow: 0px 0px 0px;"><b>Resumo:</b> <?php echo $resumo ?></p>
                            <br>
                            <p style="text-shadow: 0px 0px 0px;"><b>Personagens:</b> <?php echo $personagens ?></p>
                            <br>
                            <p style="text-shadow: 0px 0px 0px;"><b>Análise da Obra:</b> <?php echo $analiseObra ?></p>
                        </blockquote>
                    </div>

                    <div class="card-footer">
                        <a href="editar-resumo.php?id=<?php echo $id ?>&usr=<?php echo $novoEmail ?>" class="btn btn-primary">Editar Resumo</a>
                        <a href="actions/resumos/excluir-resumo.php?id=<?php echo $id ?>&usr=<?php echo $novoEmail ?>" class="btn btn-danger">Deletar Resumo</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>