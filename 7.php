<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if (is_numeric($num1) && is_numeric($num2)) {
    for($x = $num1; $x < $num2; $x++) {
        if ($x != $num1){
        echo $x;
        echo '<Br>';
        }
    }
} else {
    echo 'Números inválidos';
}

?>