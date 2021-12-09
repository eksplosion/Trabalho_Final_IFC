<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
        <h3>Editar Produto</h3>
        <form method="POST" action="update_produto.php">
<?php
    include("auth.php");
    if(check() != "Administrador")
    {
        echo "<p>Você não tem permissão para realizar esta ação</p>";
    }
    else
    {
        include("conexao.php");
        $cod = $_GET['cod'];
        $produto = mysqli_query($conn, "SELECT * FROM produto WHERE cod_barras = $cod");
        $produto = mysqli_fetch_array($produto);
        mysqli_close($conn);

        echo '<table>';

        echo '<tr>';
        echo '<td><label for="cod">Código de barras:</label></td>';
        echo '<td><input type="text" name="cod" value="'.$produto['cod_barras'].'"></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><label for="nome">Nome:</label></td>';
        echo '<td><input type="text" name="nome" value="'.$produto['nome'].'"></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><label for="validade">Validade:</label></td>';
        echo '<td><input type="date" name="validade" value="'.$produto['validade'].'"></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><label for="preco">Preço:</label></td>';
        echo '<td><input type="text" name="preco" value="'.$produto['preco'].'"></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><label for="qtd">Quantidade:</label></td>';
        echo '<td><input type="number" name="qtd" value="'.$produto['qtd'].'"></td>';
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
