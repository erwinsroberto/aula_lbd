<?php 
function soma10(&$num){ //O & antes de $num indica passagem por referência
$num += 10;
}
$a = 45;
soma10($a);
echo $a;
?>
