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
        $id = $_GET['id'];
        $produto = mysqli_query($conn, "SELECT * FROM produto WHERE id_produto = $id");
        $produto = mysqli_fetch_array($produto);
        mysqli_close($conn);

        echo '<label for="nome">Nome:</label>';
        echo '<input type="text" name="nome" value="'.$produto['nome'].'"><br>';

        echo '<label for="validade">Validade:</label>';
        echo '<input type="date" name="validade" value="'.$produto['validade'].'"><br>';

        echo '<label for="preco">Preço:</label>';
        echo '<input type="text" name="preco" value="'.$produto['preco'].'"><br>';

        echo '<label for="qtd">Quantidade:</label>';
        echo '<input type="number" name="qtd" value="'.$produto['qtd'].'"><br>';

        echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";
    }
?>
    <input type="submit" value="Submit">
</form>
