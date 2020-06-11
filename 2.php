<?php 
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if (is_numeric($num1) && is_numeric($num2)) {
    echo $num1 + $num2;
    echo '<br>';
    echo $num1 * $num2;
    echo '<br>';
    echo $num1 / $num2;
} else {
    echo 'Caracteres inválidos';
}
?>