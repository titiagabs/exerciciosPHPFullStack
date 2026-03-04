<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício 12 </h1>
    <h2>12.Verifique se um número par ou ímpar.</h2>
    <form method="POST">
        <label>Informe um número: </label>
        <input type="number" name="numero" id="numero"><br><br>
        <button type="submit">Enviar
            <?php
                $numero    = $_POST['numero'];
                $resultado = imparPar($numero);
            ?>
        </button>
    </form><br>
    <?php echo $resultado; ?><br><br>
    <button><a href="index.php">Voltar</a></button><br>
</body>
</html>