<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <h1>Exercício 16</h1>
    <?php include('funcoes.php'); ?>
    <h2>16. Leia 10 números inteiros e armazene em um vetor. Mostre os pares.</h2>
    <form method="POST">
        <label>Digite o 1° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 2° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 3° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 4° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 5° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 6° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 7° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 8° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 9° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <label>Digite o 10° número: </label>
        <input type="number" name="numero[]" id="numero"><br>
        <button type="submit">Enviar
            <?php
                $num = $_POST["numero"];
            ?>
        <button><a href="index.php">Voltar</a></button><br>
        <?php $resultado = numInteiro($num); ?>
        </button>
    </form>
</body>
</html>