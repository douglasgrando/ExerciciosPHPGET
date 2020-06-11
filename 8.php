<?php
$nome = $_GET['nome'];
if(!empty($nome)) {
    $totalcaracteres = strlen($nome);
    if($totalcaracteres>=5) {
        echo "Nome: $nome";
        echo "<br>";
        echo "Número de letras: ".$totalcaracteres;
        echo "<br>";
        echo "Nome inverso: ".strrev($nome);
        echo "<br>";
        echo "Nome maiúsculo: ".strtoupper($nome);


    } else {
        echo 'Ana não particia da brincadeira, nem Luiz, só nomes com +5 caracteres';
    }
} else {
    echo 'Digite um nome válido';
}
?>