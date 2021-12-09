<?php
    include("conexao.php");
    $login = $conn->real_escape_string($_POST['login']);
    $senha = $conn->real_escape_string($_POST['senha']);
    $senha = hash("sha256", $login.$senha, false);
    $resultado = mysqli_query(
        $conn,
        "SELECT * FROM funcionario WHERE login = '$login' && senha = '$senha' LIMIT 1"
    );
    if($resultado->num_rows == 1)
    {
        session_start();
        $resultado = mysqli_fetch_array($resultado);
        $_SESSION['login'] = $resultado['login'];
        $_SESSION['senha'] = $resultado['senha'];
        header("Location: index.php");
    }
    else
    {
        header("Location: logar.php?erro=1");
    }
?>
