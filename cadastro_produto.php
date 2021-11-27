<?php
    include("auth.php");
    if(check() == "Administrador")
    {
        include("conexao.php");
        $nome = $conn->real_escape_string($_POST['nome']);
        $validade = $conn->real_escape_string($_POST['validade']);
        $preco = $_POST['preco'];
        $preco = str_replace(',', '.', $preco);
        $preco = $conn->real_escape_string($preco);
        $qtd = $conn->real_escape_string($_POST['qtd']);
        
        $sql = "INSERT INTO produto(nome, validade, preco, qtd) VALUES (\"$nome\", \"$validade\", $preco, $qtd);";
        if(mysqli_query($conn, $sql))
            echo "<p>Produto cadastrado com sucesso</p>";
        else
            echo "<p>Erro ao cadastrar o produto</p>";
        mysqli_close($conn);
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>