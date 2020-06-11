<?php
$palavra = $_GET['palavra'];
if (!empty($palavra)) {
    $totalcaracteres= strlen($palavra);
    echo "Total de caracteres: ".$totalcaracteres;
    echo "<br>";
    echo $palavra;
    echo "<br>";
    for($x = 1; $x < $totalcaracteres; $x++) {
        echo $x;
        echo ' ';
    }

} else {
    echo 'Digite uma palavra';
}
?>