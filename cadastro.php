<?php
    include("conexao.php");
    include("auth.php");
    if(check())
    {
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $acesso = $_POST['acesso'];
        $senha = hash("sha256", $login.$senha, false);
        echo "$login<br>$senha";
    }
    else
        echo "Você é um BANANÃO!!!!!!!!!!";
?>