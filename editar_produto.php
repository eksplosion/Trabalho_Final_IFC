<form method="POST" action="update_produto.php">
<?php
    include("auth.php");
    if(check() != "Administrador")
    {
        echo "Você não tem permissão para realizar esta ação";
    }
    else
    {
        include("conexao.php");
        $cod = $_GET['cod'];
        $produto = mysqli_query($conn, "SELECT * FROM produto WHERE cod_barras = $cod");
        $produto = mysqli_fetch_array($produto);
        mysqli_close($conn);

        echo '<label for="cod">Código de barras:</label>';
        echo '<input type="text" name="cod" value="'.$produto['cod_barras'].'"><br>';

        echo '<label for="nome">Nome:</label>';
        echo '<input type="text" name="nome" value="'.$produto['nome'].'"><br>';

        echo '<label for="validade">Validade:</label>';
        echo '<input type="date" name="validade" value="'.$produto['validade'].'"><br>';

        echo '<label for="preco">Preço:</label>';
        echo '<input type="text" name="preco" value="'.$produto['preco'].'"><br>';

        echo '<label for="qtd">Quantidade:</label>';
        echo '<input type="number" name="qtd" value="'.$produto['qtd'].'"><br>';
    }
?>
    <input type="submit" value="Submit">
</form>
