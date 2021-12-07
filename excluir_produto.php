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
        $cod = $_GET['cod'];
        
        $sql = "DELETE FROM produto WHERE cod_barras=$cod";
        if(mysqli_query($conn, $sql))
            echo "<p>Produto excluido com sucesso</p>";
        else
            echo "<p>Não é possível excluir produto que tenha uma venda cadastrada</p>";
        mysqli_close($conn);
        echo '<a href="consultar_produtos.php"><div class="botao_acao">Realizar nova consulta</div></a>';
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
</html>
