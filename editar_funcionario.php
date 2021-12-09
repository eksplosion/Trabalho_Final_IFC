<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
        <h3>Editar Funcionário</h3>
        <form method="POST" action="update_funcionario.php">
<?php
    include("auth.php");
    if(check() != "Administrador")
    {
        echo "<p>Você não tem permissão para realizar esta ação</p>";
    }
    else
    {
        include("conexao.php");
        $id = $_GET['id'];
        $funcionario = mysqli_query($conn, "SELECT * FROM funcionario WHERE id_funcionario = $id");
        $funcionario = mysqli_fetch_array($funcionario);
        mysqli_close($conn);

        echo '<table>';

        echo '<input type="hidden" name="id" value="'.$id.'">';

        echo '<tr>';
        echo '<td><label for="nome">Nome:</label></td>';
        echo '<td><input type="text" name="nome" value="'.$funcionario['nome'].'"></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><label for="login">Login:</label></td>';
        echo '<td><input type="text" name="login" value="'.$funcionario['login'].'"></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><label for="acesso">Nível de acesso:</label></td>';
        echo '<td>';
        echo '<input type="radio" name="acesso" id="funcionario" value="Funcionario">';
        echo '<label for="funcionario">Funcionário</label>';
        echo '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td></td>';
        echo '<td>';
        echo '<input type="radio" name="acesso" id="administrador" value="Administrador">';
        echo '<label for="administrador">Administrador</label>';
        echo '</td>';

        echo '<tr>';
        echo '<td><label for="senha">Nova senha:</label></td>';
        echo '<td><input type="text" name="senha"></td>';
        echo '</tr>';

        echo '</table>';
    }
?>
            <input type="submit" value="Salvar">
        </form>
        <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
    </div>
</body>
</html>
