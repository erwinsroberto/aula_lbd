<?php
$primeiro=$_POST ['primeiro'];
$segundo=$_POST ['segundo'];
$terceiro=$_POST ['terceiro'];


echo "Valores iniciais: <br>";
echo "Primeiro número: $primeiro <br>";
echo "Segundo número: $segundo <br>";
echo "Terceiro número: $terceiro <br>";

$primeiro = $segundo + $terceiro;
$segundo = $segundo + 1;
$terceiro = $terceiro - 1;

echo "<br>Valores finais: <br>";
echo "Primeiro número: $primeiro <br>";
echo "Segundo número: $segundo <br>";
echo "Terceiro número: $terceiro <br>";
?>
