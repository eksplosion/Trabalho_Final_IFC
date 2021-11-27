<?php
    if(isset($_GET['erro']))
        if($_GET['erro'])
        {
            echo "<p style=\"color: red;\">Usuário ou senha inválidos!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>";
        }
?>
<form method="POST" action="login.php">
    <label for="login">Login:</label>
    <input type="text" name="login"><br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha"><br>
    <input type="submit" value="Submit">
</form>