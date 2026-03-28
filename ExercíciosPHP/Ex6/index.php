<!--
Data: 27/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exemplo:
n = 12
Resultado:
0 1 1 2 3 5 8 13 21 34 55 89
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>

<form action="" method="$_GET">
        <label>Digite um número: </label>
        <input type="number" name="n" required>
        <input type="submit" value="Exibir a sequência de Fibonacci">
</form>

<?php
if(isset($_GET["n"])){
    $n = $_GET["n"];
    $a = 0;
    $b = 1;

for ($i = 0; $i < $n; $i++) {
    echo $a . " ";
    
    $proximo = $a + $b;
    $a = $b;
    $b = $proximo;
}}
?>

</body>
</html>