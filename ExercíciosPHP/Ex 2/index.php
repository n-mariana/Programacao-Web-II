<!--
Data: 20/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversão de Temperatura</title>
</head>
<body>

<form method="get">
    <label>Temperatura: </label>
    <input type="number" name="n" step="any" required><br><br>

    <label>Fahrenheit (F) ou Celsius (C)? </label>
    <input type="text" name="t" maxlength="1" required><br><br>

    <input type="submit" value="Converter">
</form>

<?php
if (isset($_GET["n"]) && isset($_GET["t"])) {
    $temp = $_GET["n"];
    $tipo = strtoupper($_GET["t"]); // deixa maiúsculo

    if ($tipo == "F") {
        $c = 5/9 * ($temp - 32);
        echo "Resultado: $c °C";
    } elseif ($tipo == "C") {
        $f = ($temp * 9/5) + 32;
        echo "Resultado: $f °F";
    } else {
        echo "Digite apenas F ou C!";
    }
}
?>

</body>
</html>