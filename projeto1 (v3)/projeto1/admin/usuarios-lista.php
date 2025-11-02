<?php
include("config.inc.php");
include_once "admin.php";

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="../css/listausuario.css">
<div class="listausuario">
<h2>Lista de Usuários</h2>
<a href="usuarios-cadastro.php">+ Novo Usuário</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="usuarios-alterar.php?id=<?php echo $row['id']; ?>">Editar</a> |
                <a href="usuarios-excluir.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>
</div>