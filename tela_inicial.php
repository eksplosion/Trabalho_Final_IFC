<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="logout.php"><div class="botao_acao">Deslogar-se</div></a>
    <?php
        echo '<div class="container">';
        $acesso = check();
        if($acesso == "Funcionario" || $acesso == "Administrador")
        {
            echo '<div class="radius">';
            echo '<h1>Drogaria Excesso</h1>';
            echo '<div class = "miolo">';
            echo '<h3>Atendente</h3>';
            echo '<a href="cadastrar_venda.php"><div class="botao_inicial">Cadastrar venda</div></a>';
            echo '<a href="consultar_produtos.php"><div class="botao_inicial">Consultar produtos</div></a>';
            echo '<a href="gerar_relatorio.php"><div class="botao_inicial">Gerar relatório</div></a>';
            echo '</div>';
        }
        if($acesso == "Administrador")
        {
            echo '<div class="miolo">';
            echo '<h3>Administrador</h3>';
            echo '<a href="cadastrar_funcionario.php"><div class="botao_inicial">Cadastrar funcionário</div></a>';
            echo '<a href="cadastrar_produto.php"><div class="botao_inicial">Cadastrar produto</div></a>';
            echo '<a href="consultar_funcionarios.php"><div class="botao_inicial">Consultar funcionários</div></a>';
            echo '</div>';
        }
        echo '</div></div>';
    ?>
</body>
