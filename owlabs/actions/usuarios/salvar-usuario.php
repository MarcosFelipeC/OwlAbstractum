<?php
require("../../includes/conexao.php");
$nome = mb_strtoupper($_POST["nome"]);
$email = mb_strtoupper($_POST["email"]);
$senha = md5($_POST["senha"]);

$sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome','$email','$senha')";

$sql2 = "SELECT 
            COUNT(*) as total
        FROM 
            usuarios
        WHERE
            email = '$email'";
$resultado = mysqli_query($conexao, $sql2);
$row = mysqli_fetch_assoc($resultado);
if ($row["total"] == "0") {
    if (mysqli_query($conexao, $sql)) {
        echo
        "<script>
        location.href='../../login-usuario.php?msg=salvo';
    </script>
    ";
    } else {
        echo
        "<script>
        location.href='../../login-usuario.php?msg=erro';
    </script>
    ";
    }
} else {
    echo
    "<script>
        location.href='../../cadastro-usuario.php?msg=erro';
    </script>
    ";
}
