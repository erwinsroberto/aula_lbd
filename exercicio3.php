<?php
$n=$_POST['n1'];
if ($n > 0){
    for($fat = 1;$n > 1; $n--){
        $fat = $fat * $n;
    }
    echo "Resultado: ".$fat;
}else{
    echo "Não existe fatorial de 0 ou número negativo!";
}
?>