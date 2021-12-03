<?php
    include("auth.php");
    if(check() == "Administrador")
    {
        include("conexao.php");
        $nome = $conn->real_escape_string($_POST['nome']);
        $login = $conn->real_escape_string($_POST['login']);
        $senha = $conn->real_escape_string($_POST['senha']);
        $acesso = $conn->real_escape_string($_POST['acesso']);
        $senha = hash("sha256", $login.$senha, false);
        if(mysqli_query($conn, "INSERT INTO funcionario(nome, login, senha, acesso) VALUES ('$nome', '$login', '$senha', '$acesso')"))
            echo "<p>Funcionário cadastrado com sucesso</p>";
        else
            echo "<p>Erro ao cadastrar o funcionário</p>";
        echo '<a href="cadastrar_funcionario.php">Cadastrar novo funcionário</a>';
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
<a href="index.php">Voltar a tela inicial</a>