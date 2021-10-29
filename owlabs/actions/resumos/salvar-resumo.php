<?php
session_start();
if (!isset($_SESSION['logado'])) {
  echo "<script>
        location.href='index.php';
      </script>";
}
require ("../../includes/conexao.php");
$email = $_POST["email"];
$idUsuario = $_POST["idUsuario"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$link = $_POST["link"];
$personagens = $_POST["personagens"];
$resumo = $_POST["resumo"];
$analise = $_POST["analise"];

$sql = "INSERT INTO livros(idUsuario, titulo, autor, linkImagem, personagens, resumo, analiseObra) 
        VALUES('$idUsuario','$titulo','$autor', '$link', '$personagens', '$resumo', '$analise')";

if(mysqli_query($conexao,$sql)){
    echo 
    "<script>
        location.href='../../home.php?msg=salvo&usr=$email';
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