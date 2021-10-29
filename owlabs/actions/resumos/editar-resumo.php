<?php
session_start();
if (!isset($_SESSION['logado'])) {
  echo "<script>
        location.href='index.php';
      </script>";
}
require ("../../includes/conexao.php");
$id = $_POST["id"];
$email = $_POST["email"];
$idUsuario = $_POST["idUsuario"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$link = $_POST["link"];
$personagens = $_POST["personagens"];
$resumo = $_POST["resumo"];
$analise = $_POST["analise"];

$sql = "UPDATE livros SET idUsuario='$idUsuario', titulo='$titulo', autor='$autor', linkImagem='$link', personagens='$personagens', resumo='$resumo', analiseObra='$analise' WHERE idLivros=$id";

if(mysqli_query($conexao,$sql)){
    echo 
    "<script>
        location.href='../../home.php?msg=edit&usr=$email';
    </script>
    ";
}
else{
    echo 
    "<script>
        location.href='../../home.php?msg=erro';
    </script>
    ";
}
?>