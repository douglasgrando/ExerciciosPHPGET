<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if (is_numeric($num1) && is_numeric($num2)) {
   for ($x = $num1; $x <= $num2; $x++) {
       if ($x % 2 == 0) {
           echo $x;
           echo '<br>';
       }
   }
} else {
    echo 'Números inválidos';
}

?>