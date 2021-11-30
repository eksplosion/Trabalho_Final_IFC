<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>TELA INICIAL</h1>
    <?php
        $acesso = check();
        if($acesso == "Funcionario" || $acesso == "Administrador")
        {
            echo '<div class = "miolo">';
            echo '<h3>Atendente</h3>';
            echo '<a href="cadastrar_venda.php"><div class="botao_inicial"> Cadastrar venda </div></a>';
            echo '<a href="consultar_produtos.php"><div class="botao_inicial">Consultar produtos</div></a>';
            echo '<a href="consultar_vendas.php"><div class="botao_inicial"> Consultar vendas</div></a>';
            echo '</div>';
        }
        if($acesso == "Administrador")
        {
            echo '<div class = "miolo_adm">';
            echo '<h3>Administrador</h3>';
            echo '<a href="cadastrar_funcionario.php"><div class="botao_inicial">Cadastrar funcionário</div></a>';
            echo '<a href="cadastrar_produto.php"><div class="botao_inicial"> Cadastrar produto</div></a>';
            echo '<a href="consultar_funcionarios.php"><div class="botao_inicial"> Consultar funcionários</div></a>';
            echo '</div>';
        }
    ?>
</body>
