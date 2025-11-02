<?php
include("config.inc.php");
$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
    echo "<script>alert('Usuário excluído com sucesso!');window.location='usuarios-lista.php';</script>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>
