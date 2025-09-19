<?php
/*
function parOuimpar($num) {
    if ($num % 2 == 0) {
        return "par";
    } else {
        neturn "impar";
    }
}
echo parOuimpar(7);
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
</head>
<body>
    <h1>Descubra se o número é Par ou Ímpar 😄</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    function parOuImpar($num){
        if ($num % 2 == 0) {
            return "Par 😄";
        } else {
            return "Ímpar 😄";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        echo "<h2>O número $numero é " . parOuImpar($numero) . "</h2>";
    }
    ?>
</body>
</html>