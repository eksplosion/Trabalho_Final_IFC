<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
        <h3>Consulta de Funcionários</h3>
        <form method="POST" action="consulta_funcionarios.php">
            <table>
                <tr>
                    <td><label for="nome">Nome:</label></td>
                    <td><input type="text" name="nome" placeholder="Nome"></td>
                </tr>
                <tr>
                    <td><label for="acesso">Nível de acesso:</label></td>
                    <td>
                        <input type="radio" name="acesso" id="funcionario" value="Funcionario">
                        <label for="funcionario">Funcionário</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="acesso" id="administrador" value="Administrador">                           <label for="administrador">Administrador</label>
                    </td>
                </tr>
            </table>
            <input type="submit" class="botao_acao" value="Consultar">
        </form>
        <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
    </div>
</body>
</html>
