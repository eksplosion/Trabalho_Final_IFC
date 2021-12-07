<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formu">
<?php
    if(isset($_GET['erro']))
        if($_GET['erro'])
        {
            echo "<p style=\"color: red;\">Usuário ou senha inválidos!</p>";
        }
?>
    <form method="POST" action="login.php">
        <table>
            <tr>
                <td><label for="login">Login:</label></td>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <td><label for="senha">Senha:</label></td>
                <td><input type="password" name="senha"></td>
            </tr>
        </table>
        <input type="submit" class="botao_acao" value="Logar">
    </form>
</body>
</html>
