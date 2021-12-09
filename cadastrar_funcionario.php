<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
    <h3>Cadastro de Funcionário</h3>
    <form method="POST" action="cadastro_funcionario.php">
        <table>
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" name="nome" placeholder="Nome"></td>
            </tr>

            <tr>
                <td><label for="login">Login:</label></td>
                <td><input type="text" name="login" placeholder="Login"></td>
            </tr>

            <tr>
                <td><label for="senha">Senha:</label></td>
                <td><input type="password" name="senha" placeholder="Senha"></td>
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

        <input type="submit" class="botao_acao" value="Cadastrar">
    </form>
    <a href="index.php"><div class="botao_acao">Voltar a tela inicial</div></a>
</body>
