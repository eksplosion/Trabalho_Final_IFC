<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include("auth.php");
    $acesso = check();
    if($acesso == "Administrador")
    {
        include("conexao.php");

        $nome = $_POST['nome'];
        $acesso = $_POST['acesso'];

        $busca_nome = $nome != "";
        $busca_acesso = $acesso != "";
        
        $sql = "SELECT * FROM funcionario".
        ($busca_acesso == true ? " WHERE acesso = \"$acesso\"" : "").
        " ORDER BY nome";
        $resultado = mysqli_query($conn, $sql);
        $funcionarios = Array();
        while(($funcionario = mysqli_fetch_array($resultado)) != null)
        {
            if( $busca_nome == false ||
                strpos(
                    strtolower($funcionario['nome']),
                    strtolower($nome)
                ) !== false
            )
                array_push($funcionarios, $funcionario);
        }
        mysqli_close($conn);

        echo "<table class=\"tabela\"><tr><th>Nome</th><th>Login</th><th>Nível de acesso</th><th>Ações</th>";
        foreach($funcionarios as $funcionario)
        {
            echo "<tr>".
                 "<td>".$funcionario['nome']."</td>".
                 "<td>".$funcionario['login']."</td>".
                 "<td>".$funcionario['acesso']."</td>".
                 "<td><a href=\"editar_funcionario.php?id=".$funcionario['id_funcionario']."\"><div class=\"botao_acao\">Editar</div></a> ".
                 "<a href=\"excluir_funcionario.php?id=".$funcionario['id_funcionario']."\"><div class=\"botao_acao\">Excluir</div></a></td>".
                 "</tr>";
        }
        echo "</table><br>";
        echo '<a href="consultar_funcionarios.php"><div class="botao_acao">Realizar nova consulta</div></a>';
    }
    else
        echo "<p>Você não tem permissão para realizar esta ação</p>";
?>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
</html>
