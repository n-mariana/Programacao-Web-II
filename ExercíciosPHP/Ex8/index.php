<!--
Data: 28/03/2026
Autor: Maria Eduarda Nascimento dos Santos
Objetivo:

Exercício 8 - Soma de 0 até N com Função
Crie uma função soma(n) que receba um número inteiro e retorne a soma de 0 até esse número.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Digite um número e diremos a soma de 0 até ele!</h1>
    <form action = "" method = "get">
        <label>Digite um número:</label>
        <input type = "number" name = "n" step="any" required>
        <input type = "submit" value = "Somar"> 

<?php

if (isset($_GET["n"])) {

    function soma($n){
        $r = 0;
        for($s = 0; $s <= $n; $s++){
        $r += $s;
        }
        return $r;
    }  
    $resultado = soma($_GET["n"]);
    echo "Resultado: " . $resultado;  
}
?>
    
</body>
</html>