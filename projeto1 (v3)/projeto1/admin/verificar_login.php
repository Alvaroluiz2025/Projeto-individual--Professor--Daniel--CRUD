<?php
session_start();
include("config.inc.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$res = mysqli_query($conexao, $sql);

if (mysqli_num_rows($res) > 0) {
    $_SESSION['usuario'] = $email;
    header("Location: ../index.php"); // leva para a página principal do site institucional
} else {
    echo "<script>alert('Login incorreto!');window.location='usuarios-lista.php';</script>";
}
?>
