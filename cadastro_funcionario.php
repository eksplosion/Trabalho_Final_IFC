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
            if(mysqli_query($conn, "INSERT INTO funcionario(nome, login, senha, acesso) VALUES ('$nome', '$login', '$senha', '$acesso')"))
                echo "<p>Funcionário cadastrado com sucesso</p>";
            else
                echo "<p>Erro ao cadastrar funcionário</p>";
        }
            echo '<a href="cadastrar_funcionario.php"><div class="botao_acao">Cadastrar novo funcionário</div></a>';
    }
    else
        echo "<p>Você não tem permissão para realizar esta ação</p>";
?>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
</html>
