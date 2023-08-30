<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];

function soma($n1, $n2) {
    return $n1 + $n2;
}

function subtracao($n1, $n2) {
    return $n1 - $n2;
}

function multiplicacao($n1, $n2) {
    return $n1 * $n2;
}

function divisao($n1, $n2) {
    if ($n2 != 0) {
        return $n1 / $n2;
    } else {
        return "Divisão por zero não é possível.";
    }
}

function raizQuadrada($n1) {
    return sqrt($n1);
}

$opcao=$_POST['opcao'];
switch ($opcao) {
    case 1:
        echo "Resultado da soma: " . soma($n1, $n2);
        break;
    case 2:
        echo "Resultado da subtração: " . subtracao($n1, $n2);
        break;
    case 3:
        echo "Resultado da multiplicação: " . multiplicacao($n1, $n2);
        break;
    case 4:
        echo "Resultado da divisão: " . divisao($n1, $n2);
        break;
    case 5:
        echo "Raiz quadrada de $n1: " . raizQuadrada($n1);
        break;
    default:
        echo "Opção inválida.";
}
?>
