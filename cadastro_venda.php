<?php
    include("auth.php");
    $acesso = check();
    if($acesso == "Administrador" || $acesso = "Funcionario")
    {
        include("conexao.php");
        date_default_timezone_set("Brazil/East");
        mysqli_query($conn, "INSERT INTO venda(data_venda) VALUES (\"". date("Y-m-d H:i:s") ."\")");
        $id_venda = mysqli_insert_id($conn);
        echo "$id_venda";
        for($i = 0; $i < 10; $i++)
        {
            $cod =  $conn->real_escape_string($_POST["cod$i"]);
            if($cod == "")
                break;
            $qtd =  $conn->real_escape_string($_POST["qtd$i"]);
            $qtd = $qtd == "" ? 1 : $qtd;
            mysqli_query($conn, "INSERT INTO produtos_venda(id_venda, cod_barras, qtd_vendida) VALUES ($id_venda, $cod, $qtd)");
        }
        
        echo "<p>Venda cadastrada com sucesso</p>";
        mysqli_close($conn);
        echo '<a href="cadastrar_venda.php">Cadastrar nova venda</a>';
    }
    else
        echo "Você não tem permissão para realizar esta ação";
?>
<a href="index.php">Voltar a tela inicial</a>