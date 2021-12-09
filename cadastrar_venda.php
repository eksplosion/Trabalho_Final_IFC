<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
        <h3>Cadastro de Venda</h3>
        <form method="POST" action="cadastro_venda.php">
            <table>
                <tr>
                    <th>Código de barras</th>
                    <th>Quantidade</th>
                </tr>
            <?php
                for($i = 0; $i < 10; $i++)
                {
                    echo "<tr><td><input type=\"number\" name=\"cod$i\"></td>".
                         "<td><input type=\"number\" name=\"qtd$i\"></td></tr>";
                }
            ?>
            </table>
            <input type="submit" value="Cadastrar">
        </form>
        <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
    </div>
</body>
</html>
