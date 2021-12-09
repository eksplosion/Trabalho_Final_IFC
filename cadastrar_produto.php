<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
        <h3>Cadastro de Produto</h3>
        <form method="POST" action="cadastro_produto.php">
            <table>
                <tr>
                    <td>Cód de barras:</td>
                    <td><input type="number" name="cod" placeholder="Código de barras"></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" placeholder="Nome do produto"></td>
                </tr>
                <tr>
                    <td><label for="validade_menor">Validade:</label></td>
                    <td><input type="date" name="validade"></td>
                </tr>

                <tr>
                    <td><label for="preco">Preço:</label></td>
                    <td><input type="text" name="preco" placeholder="Preço"></td>
                </tr>

                <tr>
                    <td><label for="qtd">Quantidade:</label></td>
                    <td><input type="number" name="qtd" placeholder="Quantidade"></td>
                </tr>
            </table>

            <input type="submit" class="botao_acao" value="Cadastrar">
        </form>
        <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
    </div>
</body>
