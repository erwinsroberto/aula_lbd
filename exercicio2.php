<?php
$nota1 =$_POST['nota1'];
$nota2 =$_POST['nota2'];
$nota3 =$_POST['nota3'];

$peso1 =$_POST['peso1'];
$peso2 =$_POST['peso2'];
$peso3 =$_POST['peso3'];


$media = ($nota1 * $peso1 + $nota2 * $peso2 + $nota3 * $peso3) / ($peso1 + $peso2 + $peso3);

echo "Notas: $nota1, $nota2, $nota3 <br>";
echo "Pesos: $peso1, $peso2, $peso3 <br>";
echo "Média ponderada: $media <br>";

if ($media >= 7) {
    echo "Aprovado";
} elseif ($media < 3) {
    echo "Reprovado";
} else {
    echo "Em prova final";
}
?>
