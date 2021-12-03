<?php
    include("auth.php");
    if(check() == "Administrador")
    {
        include("conexao.php");
        $cod = $_GET['cod'];
        
        $sql = "DELETE FROM produto WHERE cod_barras='$cod'";
        if(mysqli_query($conn, $sql))
            echo "<p>Produto excluido com sucesso</p>";
        else
            echo "<p>Erro ao excluir o produto</p>";
        mysqli_close($conn);
        echo "<a href=\"consultar_produtos.php\">Realizar nova consulta</a>";
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
<a href="index.php">Voltar a tela inicial</a>