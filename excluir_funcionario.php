<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include("auth.php");
    if(check() == "Administrador")
    {
        include("conexao.php");
        $id = $_GET['id'];
        if($id == 1)
        {
            echo "<p>Não é possível excluir a conta principal</p>";
        }
        else
        {
            $sql = "DELETE FROM funcionario WHERE id_funcionario=$id";
            if(mysqli_query($conn, $sql))
                echo "<p>Funcionário excluido com sucesso</p>";
            else
                echo "<p>Erro ao excluir funcionário</p>";
            echo mysqli_error($conn);
            mysqli_close($conn);
        }
            echo '<a href="consultar_funcionarios.php"><div class="botao_acao">Realizar nova consulta</div></a>';
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
</html>
