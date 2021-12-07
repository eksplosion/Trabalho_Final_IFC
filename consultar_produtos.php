<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
        <h3>Consulta de Produtos</h3>
        <form method="POST" action="consulta_produtos.php">
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
                    <td><label for="validade_menor">Validade entre:</label></td>
                    <td><input type="date" name="validade_menor"></td>
                </tr>
                <tr>
                    <td style="text-align: right"><label for="validade_maior">e</label></td>
                    <td><input type="date" name="validade_maior"></td>
                </tr>
            </table>
            <input type="submit" class="botao_acao" value="Consultar">
        </form>
        <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
    </div>
</body>
</html>
