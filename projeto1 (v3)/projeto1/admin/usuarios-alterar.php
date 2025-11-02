<?php
include("config.inc.php");
$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (!empty($_POST['senha'])) {
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $update = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
    } else {
        $update = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
    }

    if (mysqli_query($conexao, $update)) {
        echo "<script>alert('Usuário atualizado com sucesso!');window.location='usuarios-lista.php';</script>";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>

<h2>Editar Usuário</h2>
<form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

    <label>Nova Senha (opcional):</label><br>
    <input type="password" name="senha"><br><br>

    <button type="submit">Salvar</button>
</form>
