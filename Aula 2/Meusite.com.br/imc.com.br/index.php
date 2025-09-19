!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form action="calculo.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Idade:</label>
        <input type="number" name="idade" required><br><br>

        <label>Altura (em metros):</label>
        <input type="text" name="altura" required><br><br>

        <label>Peso (em kg):</label>
        <input type="text" name="peso" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>