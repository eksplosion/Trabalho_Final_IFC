<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include("auth.php");
    $acesso = check();
    if($acesso == "Administrador" || $acesso == "Funcionario")
    {
        include("conexao.php");

        $cod = $_POST['cod'];
        $busca_nome = $_POST['nome'] != "";

        $nome = $_POST['nome'];
        $validade_menor = $_POST['validade_menor'] == "" ? "420-01-01" : $_POST['validade_menor']; 
        $validade_maior = $_POST['validade_maior'] == "" ? "6969-01-01" : $_POST['validade_maior']; 
        
        $sql = "SELECT * FROM produto WHERE validade BETWEEN \"$validade_menor\" AND \"$validade_maior\"".
        ($cod != "" ? " AND cod_barras = $cod" : "").
        " ORDER BY validade";
        $resultado = mysqli_query($conn, $sql);
        $produtos = Array();
        while(($produto = mysqli_fetch_array($resultado)) != null)
        {
            if( $busca_nome == false ||
                strpos(
                    strtolower($produto['nome']),
                    strtolower($nome)
                ) !== false
            )
                array_push($produtos, $produto);
        }
        mysqli_close($conn);

        echo "<table class=\"tabela\"><tr><th>Cód de barras</th><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Validade</th>".($acesso == "Administrador" ? "<th>Ações</th>" : "");
        foreach($produtos as $produto)
        {
            echo "<tr>".
                 "<td>".$produto['cod_barras']."</td>".
                 "<td>".$produto['nome']."</td>".
                 "<td>".$produto['preco']."</td>".
                 "<td>".$produto['qtd']."</td>".
                 "<td>".$produto['validade']."</td>".
                 ($acesso == "Administrador" ?
                 "<td><a href=\"editar_produto.php?cod=".$produto['cod_barras']."\">Editar</a> ".
                 "<a href=\"deletar_produto.php?cod=".$produto['cod_barras']."\">Deletar</a></td>"
                 : "" ).
                 "</tr>";
        }
        echo "</table>";
        echo "<a href=\"consultar_produtos.php\">Realizar nova consulta</a>";
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
    <a href="index.php">Voltar a tela inicial</a>
</body>
</html>
