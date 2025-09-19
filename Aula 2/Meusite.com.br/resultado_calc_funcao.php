<?php
/*
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

function media($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) /3;
    echo "Sua média é: " . $media;
}
media($n1, $n2, $n3);
*/
?>

<?php

function media($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

if (1_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_REQUEST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $resultado = media($n1, $n2, $n3);
    echo "<h2>Resultado da Media</h2>";
    echo "Os numeros digitados foram: $n1, $n2 e $n3 <br>";
    echo "A media é: <strong>" .
    number_format($resultado, 2, ',', '.') . "</strong>";

}else{
        echo "nenhum valor enviado.";
    }
?>