<?php 
session_start();
if (!isset($_SESSION['logado'])) {
  echo "<script>
        location.href='index.php';
      </script>";
}
require('../../includes/conexao.php');

$id = $_GET['id'];
$usr = $_GET['usr'];
$sql = "DELETE FROM livros WHERE idLivros = $id";

if(mysqli_query($conexao, $sql)){
    echo "<script>
            location.href='../../home.php?usr=$usr';
        </script>";
}