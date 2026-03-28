<!--
Data: 27/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
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
        <label>Digite o primeiro número: </label>
        <input type="number" name="n1" required>
        <br><br>
        <label>Digite o segundo número: </label>
        <input type="number" name="n2" required>
        <br><br>
        <label>Digite o terceiro número: </label>
        <input type="number" name="n3" required>
        <br><br>
        <label>Digite o quarto número: </label>
        <input type="number" name="n4" required>
        <br><br>
        <label>Digite o quinto número: </label>
        <input type="number" name="n5" required>
        <br><br> 
        <input type="submit" value="Calcular a soma dos fatoriais">
    </form>

<?php
if(isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"]) && isset($_GET["n4"]) && isset($_GET["n5"])){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $n5 = $_GET["n5"];
    $r1 = 1;
    $r2 = 1;
    $r3 = 1;
    $r4 = 1;
    $r5 = 1;

    for($f = $n1; $f >= 1; $f--){
        $r1 *= $f;
    }
    for($f = $n2; $f >= 1; $f--){
        $r2 *= $f;
    }
    for($f = $n3; $f >= 1; $f--){
        $r3 *= $f;
    }
    for($f = $n4; $f >= 1; $f--){
        $r4 *= $f;
    }
    for($f = $n5; $f >= 1; $f--){
        $r5 *= $f;
    }
    $s = $r1+$r2+$r3+$r4+$r5;
    echo "resultado: " . $s;
}

?>
</body>
</html>