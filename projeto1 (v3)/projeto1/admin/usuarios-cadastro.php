<?php
include("config.inc.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhaCriptografada')";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Usuário cadastrado com sucesso!');window.location='usuarios-lista.php';</script>";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>
<link rel="stylesheet" href="../css/tabela.css">
<div class="tabela">
<h2>Cadastrar Usuário</h2>
<form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

   <button type="submit">Salvar</button>
</form>
</div>