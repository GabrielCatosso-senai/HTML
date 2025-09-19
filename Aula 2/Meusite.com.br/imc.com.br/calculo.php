<?php
$nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];


    $imc = $peso / ($altura * $altura);


    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 24.9) {
        $classificacao = "Peso normal";
    } elseif ($imc < 29.9) {
        $classificacao = "Sobrepeso";
    } elseif ($imc < 34.9) {
        $classificacao = "Obesidade Grau 1";
    } elseif ($imc < 39.9) {
        $classificacao = "Obesidade Grau 2";
    } else {
        $classificacao = "Obesidade Grau 3";
    }
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Resultado IMC</title>
    </head>
    <body>
        <h1>Resultado do IMC</h1>
<?php 
        echo "$nome, com $idade anos, possui IMC de " . number_format($imc, 2, ',', '.') . " e está classificado como $classificacao.";
?>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
        <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
        <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
        <p><strong>IMC:</strong> <?php echo number_format($imc, 2, ',', '.'); ?></p>
        <p><strong>Classificação:</strong> <?php echo $classificacao; ?></p>

        <br>
        <a href="index.php">Calcular novamente</a>
    </body>
    </html>