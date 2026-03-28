<!--
Data: 28/03/2026
Autor: Maria Eduarda Nascimento dos Santos
Objetivo:

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>

<h2>Digite uma lista de números e diremos qual é a média aritmética(atenção separe os números por ",")! </h2>

<form action="" method="$_GET">
    <label>Digite os números: </label>
    <input type="text" name="v">
    <input type="submit" value="calcular">
</form>

<?php 
if (isset($_GET["v"])){

    function media($v){
        $v = explode(",", $v);
        $v = array_map('floatval', $v);
        $s = array_sum($v);
        $m = $s / sizeof($v);
        return $m;
    }

    echo "Média: " . media($_GET["v"]);
}
?>
 
</body>
</html>