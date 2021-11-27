<?php
    include('auth.php');
    if(!check())
    {
        header('Location: logar.php');
        exit();
    }
    include('tela_inicial.php');
?>