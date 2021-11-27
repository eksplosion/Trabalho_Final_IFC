<?php
    function check()
    {
        include("conexao.php");
        session_start();
        if(!isset($_SESSION['login']) || !isset($_SESSION['senha']))
            return false;
            
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];

        $resultado = mysqli_query(
            $conn,
            "SELECT * FROM funcionario WHERE login = '$login' && senha = '$senha' LIMIT 1"
        );

        if($resultado->num_rows == 0)
            return NULL;
        else
        {
            $resultado = mysqli_fetch_array($resultado);
            return $resultado['acesso'];
        }
        mysqli_close($conn);
    }
?>
