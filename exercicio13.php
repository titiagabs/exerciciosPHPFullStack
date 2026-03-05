<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 13</h1>
    <?php include('funcoes.php'); ?>
    <h2>13. Leia dois números e exiba o maior entre eles.</h2>
    <form method="POST">
        <label>Digite o primeiro número: </label>
        <input type="number" name="num1" id="num1"><br>
        <label>Digite o segundo número: </label>
        <input type="number" name="num2" id="num2"><br><br>
        <button type="submit">Enviar
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $resultado = doisNum($num1,$num2);
            ?>
        <button><a href="index.php">Voltar</a></button>
    </form>
    <h3><?php echo $resultado; ?></h3>
</body>
</html>