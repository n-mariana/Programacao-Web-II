<!--
Data: 13/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 1</title>
</head>
<body>

<form action="" method="get">
    <label>Digite um número: </label>
    <input type="number" name="n" step="any" required>

    <input type = "submit" value = "Verificar"> 

</form>

<?php
if (isset($_GET["n"])) {
$n = $_GET["n"];
if ($n >= 100 && $n <= 200) {
    echo "O número está entre 100 e 200.";
} else {
    echo "O número NÃO está entre 100 e 200.";
}
}
?>



</body>
</html>