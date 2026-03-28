<!--
Data: 20/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    
    <form action="" method="$_GET">
        <label>Digite o primeiro número:</label>
        <input type="number" name="n1" step="any" required>
        <br><br>

        <label> Digite o segundo número:</label>
        <input type="number" name="n2" step="any" required>
        <br><br>

        <label>Digite o operador("+", "-", "*" ou "/"):</label>
        <input type="text" name="op" maxlength="1" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

<?php 
if(isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["op"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $op = $_GET["op"];

    if($op == "+") {

        $r = $n1 + $n2;
        echo "O resultado será: " . $r;
    }
    else if($op == "-") {

        $r = $n1 - $n2;
        echo "O resultado será: " . $r;
    }
    else if($op == "*") {

        $r = $n1 * $n2;
        echo "O resultado será: " . $r;
    }
    else if($op == "/") {

        $r = $n1 / $n2;
        echo "O resultado será: " . $r;
    } 
    else{
        echo "Opção Inválida";
    }  
}
?>
    
</body>
</html>