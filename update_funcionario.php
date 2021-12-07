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
        $id = $_POST['id'];
        $nome = $conn->real_escape_string($_POST['nome']);
        $login = $conn->real_escape_string($_POST['login']);
        $senha = $conn->real_escape_string($_POST['senha']);
        $acesso = $conn->real_escape_string($_POST['acesso']);
        if($login == "" || $senha == "")
        {
            echo "<p>Login e senha não podem estar vazios</p>";
        }
        else
        {
            $senha = hash("sha256", $login.$senha, false);
            $sql = "UPDATE funcionario SET nome='$nome',login='$login',acesso='$acesso',senha='$senha' WHERE id_funcionario = $id";
            if(mysqli_query($conn, $sql))
                echo "<p>Funcionário alterado com sucesso</p>";
            else
                echo "<p>Erro ao alterar funcionário</p>";
            mysqli_close($conn);
            echo '<a href="consultar_funcionarios.php"><div class="botao_acao">Realizar nova consulta</div></a>';
        }
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
