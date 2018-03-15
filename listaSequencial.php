<?php

$num1 = $_POST['n1'];
$num2 = $_POST['n2'];

$soma = $num1 + $num2;

echo "<h2>A soma de $num1 + $num2 = $soma <h2/> ";

//-----------------------------

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo '$media';