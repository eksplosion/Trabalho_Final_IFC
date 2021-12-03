<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class = "formu">
        <h3> Consulta de Produtos</h3>
        <form method="POST" action="consulta_produtos.php">
            
            <table>
                <tr>
                    <td></td>
                    <td><input type="text" name="nome" placeholder="Nome do produto"></td>
                </tr>
                <tr>
                    <td><label for="validade_menor">Validade entre</label></th>
                    <td><input type="date" name="validade_menor"></th>
                </tr>
                <tr>
                    <td><label for="validade_maior">e</label></th>
                    <td><input type="date" name="validade_maior"></th>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
