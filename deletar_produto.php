<?php
    include("auth.php");
    if(check() == "Administrador")
    {
        include("conexao.php");
        $id = $_GET['id'];
        
        $sql = "DELETE FROM produto WHERE id_produto='$id'";
        if(mysqli_query($conn, $sql))
            echo "<p>Produto excluido com sucesso</p>";
        else
            echo "<p>Erro ao excluir o produto</p>";
        mysqli_close($conn);
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
