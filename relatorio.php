<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include("auth.php");
    $acesso = check();
    $acesso = "Administrador";
    if($acesso == "Administrador" || $acesso == "Funcionario")
    {
        include("conexao.php");
        date_default_timezone_set("Brazil/East");

        $rel_tipo = $_POST['rel_tipo'];

        $ano = date("Y");
        $mes = date("m");
        $dia = date("d");

        $limite = date("Y-m-d H:i:s", mktime(0, 0, 0, $mes, $dia+1, $ano));

        switch($rel_tipo)
        {
            case "diario":
                $data = mktime(0, 0, 0, $mes, $dia, $ano);
                $data = date("Y-m-d H:i:s", $data);
            break;
            case "mensal":
                $data = mktime(0, 0, 0, $mes-1, $dia, $ano);
                $data = date("Y-m-d H:i:s", $data);
            break;
            case "anual":
                $data = mktime(0, 0, 0, $mes, $dia, $ano-1);
                $data = date("Y-m-d H:i:s", $data);
            break;
            default:
                $data = $_POST['data_menor'];
                $limite = $_POST['data_maior'];
        }

        $sql = "SELECT produto.cod_barras, nome, qtd, SUM(qtd_vendida) AS qtd_vendida ".
            "FROM produto JOIN produtos_venda JOIN venda ".
            "ON venda.id_venda = produtos_venda.id_venda ".
            "AND produto.cod_barras = produtos_venda.cod_barras ".
            "WHERE data_venda BETWEEN '$data' AND '$limite' ".
            "GROUP BY produto.cod_barras";
        echo $sql;
        $resultado = mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        $vendas = Array();
        while(($venda = mysqli_fetch_array($resultado)) != null)
        {
            array_push($vendas, $venda);
        }
        mysqli_close($conn);

        echo "<table class=\"tabela\"><tr><th>Código de barras</th><th>Nome</th><th>Quantidade vendida</th><th>Quantidade em estoque</th>";
        foreach($vendas as $venda)
        {
            echo "<tr>".
                 "<td>".$venda['cod_barras']."</td>".
                 "<td>".$venda['nome']."</td>".
                 "<td>".$venda['qtd_vendida']."</td>".
                 "<td>".$venda['qtd']."</td>".
                 "</tr>";
        }
        echo "</table><br>";
        echo '<a href="gerar_relatorio.php"><div class="botao_acao">Gerar novo relatório</div></a>';
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
</html>
