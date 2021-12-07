<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <style>
        form{
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="formu">
        <h3>Gerar Relatório</h3>
        <form method="POST" action="relatorio.php">
            <input type="hidden" name="rel_tipo" value="diario">
            <input type="submit" class="botao_acao" value="Relatório diário">
        </form>
        <form method="POST" action="relatorio.php">
            <input type="hidden" name="rel_tipo" value="mensal">
            <input type="submit" class="botao_acao" value="Relatório mensal">
        </form>
        <form method="POST" action="relatorio.php">
            <input type="hidden" name="rel_tipo" value="anual">
            <input type="submit" class="botao_acao" value="Relatório anual">
        </form>
        <form method="POST" action="relatorio.php">
            <input type="hidden" name="rel_tipo" value="periodo">
            <table>
                <tr>
                    <td><label for="data_menor">Período entre:</label></td>
                    <td><input type="date" name="data_menor"></td>
                </tr>
                <tr>
                    <td style="text-align: right"><label for="data_maior">e</label></td>
                    <td><input type="date" name="data_maior"></td>
                </tr>
            </table>
            <input type="submit" class="botao_acao" value="Relatório por período">
        </form><br>
        <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
    </div>
</body>
</html>
