<?php
$tabuada = $_GET['tabuada'];

if(is_numeric($tabuada)){
    echo 'Tabuada do '.$tabuada.'<br>';
    for($x =1; $x <=10; $x++){
        echo "$x x $tabuada = ".($tabuada*$x)."<br>";
    }
} else {
    echo 'Verifique o valor inserido e tente novamente';
}
?>