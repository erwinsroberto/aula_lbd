<?php
$letra =$_POST['letra'];

switch (($letra)) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "$letra é uma vogal.";
        break;
    default:
        echo "$letra é uma consoante.";
}
?>
