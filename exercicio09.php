<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício 09</h1>
    <h2>9. Leia números até que a soma ultrapasse 100.</h2>
    <form method="POST">
        <label>Informe o primeiro número:</label>
        <input type="number" name="num1" id="num1"><br>
        <label>Informe o segundo número:</label>
        <input type="number" name="num2" id="num2"><br>
        <label>Informe o terceiro número:</label>
        <input type="number" name="num3" id="num3"><br>
        <label>Informe o quarto número:</label>
        <input type="number" name="num4" id="num4"><br>
        <label>Informe o quinto número:</label>
        <input type="number" name="num5" id="num5"><br>
        <button type="submit">Enviar
        <a href="index.php"><button>Voltar</a></button>
    <?php
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $num3= $_POST["num3"];
        $num4= $_POST["num4"];
        $num5= $_POST["num4"];
        $resultado= leiaNumeros($num1, $num2, $num3, $num4, $num5);
    ?>
    </form>
    <h3><?php echo $resultado; ?></h3>
</body>
</html>