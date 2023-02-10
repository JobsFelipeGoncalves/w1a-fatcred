<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "";
    $porta = "";
    
    $conexao = new PDO("mysql:host=$host;dbname=".$banco, $usuario, $senha);

?>