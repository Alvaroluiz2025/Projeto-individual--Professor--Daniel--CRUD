<?php
include("config.inc.php");
session_start();

// opcional: só quem está logado pode ver
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT nome, email FROM usuarios ORDER BY id ASC";
$result = mysqli_query($conexao, $sql);
?>

<h2>Usuários Cadastrados</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum usuário encontrado.</td></tr>";
    }
    ?>
</table>

<br>
<a href="usuarios-cadastro.php">+ Cadastrar novo usuário</a>