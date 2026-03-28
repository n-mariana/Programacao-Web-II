<!--
Data: 27/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    
<form action="" method="$_GET">
    <label> Digite o primeiro número: </label>
    <input type="number" name="n1" step="any" required>
    <br><br>
    <label> Digite o segundo número: </label>
    <input type="number" name="n2" step="any" required>
    <br><br>
    <label> Digite o terceiro número: </label>
    <input type="number" name="n3" step="any" required>
    <br><br>
    <label> Digite o quarto número: </label>
    <input type="number" name="n4" step="any" required>
    <br><br>
    <label> Digite o quinto número: </label>
    <input type="number" name="n5" step="any" required>
    <br><br>
    <label> Digite o sexto número: </label>
    <input type="number" name="n6" step="any" required>
    <br><br>
    <label> Digite o sétimo número: </label>
    <input type="number" name="n7" step="any" required>
    <br><br>
    <label> Digite o oitavo número: </label>
    <input type="number" name="n8" step="any" required>
    <br><br>
    <input type="submit" value="Classificar">
</form>

<?php 
if(isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"]) && isset($_GET["n4"]) && isset($_GET["n5"]) && isset($_GET["n6"]) && isset($_GET["n7"]) && isset($_GET["n8"])){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $n5 = $_GET["n5"];
    $n6 = $_GET["n6"];
    $n7 = $_GET["n7"];
    $n8 = $_GET["n8"];
    $positivos = [];
    $negativos = [];

    //se positivos
    if($n1 > 0)$positivos[] = $n1;

    if($n2 > 0)$positivos[] = $n2;

    if($n3 > 0)$positivos[] = $n3;

    if($n4 > 0)$positivos[] = $n4;

    if($n5 > 0)$positivos[] = $n5;

    if($n6 > 0)$positivos[] = $n6;

    if($n7 > 0)$positivos[] = $n7;

    if($n8 > 0)$positivos[] = $n8;

    // se negativos
    if($n1 < 0)$negativos[] = $n1;

    if($n2 < 0)$negativos[] = $n2;

    if($n3 < 0)$negativos[] = $n3;

    if($n4 < 0)$negativos[] = $n4;

    if($n5 < 0)$negativos[] = $n5;

    if($n5 < 0)$negativos[] = $n5;

    if($n6 < 0)$negativos[] = $n6;

    if($n7 < 0)$negativos[] = $n7;

    if($n8 < 0)$negativos[] = $n8;

    echo "Positivos: ";
    print_r ($positivos);

    echo "Negativos: ";
    print_r($negativos);
    
}
?>

</body>
</html>