<html>
<head>
    <link rel="stylesheet" href="css/style.css">
<head>
<body>
<?php
    include("auth.php");
    $acesso = check();
    if($acesso == "Administrador" || $acesso = "Funcionario")
    {
        include("conexao.php");
        date_default_timezone_set("Brazil/East");
        mysqli_query($conn, "INSERT INTO venda(data_venda) VALUES (\"". date("Y-m-d H:i:s") ."\")");
        $id_venda = mysqli_insert_id($conn);
        for($i = 0; $i < 10; $i++)
        {
            $cod =  $conn->real_escape_string($_POST["cod$i"]);
            if($cod == "")
                break;
            $qtd =  $conn->real_escape_string($_POST["qtd$i"]);
            $qtd = $qtd == "" ? 1 : $qtd;
            mysqli_query($conn, "INSERT INTO produtos_venda(id_venda, cod_barras, qtd_vendida) VALUES ($id_venda, $cod, $qtd)");
            mysqli_query($conn, "UPDATE produto SET qtd = qtd - $qtd WHERE cod_barras=$cod");
        }
        
        echo "<p>Venda cadastrada com sucesso</p>";
        mysqli_close($conn);
        echo '<a href="cadastrar_venda.php"><div class="botao_acao">Cadastrar nova venda</div></a>';
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
