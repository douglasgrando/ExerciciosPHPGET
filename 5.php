<form>
Nota 1: <input type="number" name="nota1"><br>
Nota 2: <input type="number" name="nota2"><br>
Nota 3: <input type="number" name="nota3"><br>
Nota 4: <input type="number" name="nota4"><br>

<input type="submit" value="calcular">

</form>

<?php 
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];

function valid($nota) {
    if(is_numeric($nota)){
        if($nota >= 0 && $nota <= 10){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

if (valid($nota1) && valid($nota2) && valid($nota3) && valid($nota4)) {
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    echo 'Média '.$media;
    if ($media >= 7){
        echo ' Aprovado!';
    } elseif ($media >=5) {
        echo ' Está em Exame';
    } else {
        echo ' Está reprovado';
    }
} else {
    echo 'Verifique os valores inseridos';
}
?>