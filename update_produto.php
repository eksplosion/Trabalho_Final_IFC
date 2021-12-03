<?php
    include("auth.php");
    if(check() == "Administrador")
    {
        include("conexao.php");
        $cod = $_POST['cod'];
        $nome = $conn->real_escape_string($_POST['nome']);
        $validade = $conn->real_escape_string($_POST['validade']);
        $preco = $_POST['preco'];
        $preco = str_replace(',', '.', $preco);
        $preco = $conn->real_escape_string($preco);
        $qtd = $conn->real_escape_string($_POST['qtd']);
        
        $sql = "UPDATE produto SET cod_barras='$cod', nome='$nome',validade='$validade',preco='$preco',qtd='$qtd' WHERE cod_barras = $cod";
        if(mysqli_query($conn, $sql))
            echo "<p>Produto alterado com sucesso</p>";
        else
            echo "<p>Erro ao alterar o produto</p>";
        mysqli_close($conn);
        echo "<a href=\"consultar_produtos.php\">Realizar nova consulta</a>";
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
<a href="index.php">Voltar a tela inicial</a>