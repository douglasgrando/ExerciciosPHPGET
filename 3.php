<?php 
$numero = $_GET ['numero'];
if(is_numeric($numero)) {
    $sort = rand(1,10);
    if($sort == $numero) {
        echo 'Número correto. '.$sort.' foi o número sorteado e '.$numero.' foi o número escolhido!';
    } else {
        echo 'Número errado. '.$sort.' foi o número sorteado e '.$numero.' foi o número escolhido!';
    }
} else {
    echo 'Caractere inserido inválido';
}
?>