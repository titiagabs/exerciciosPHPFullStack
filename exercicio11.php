<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício 11</h1>
    <h2>11.Classifique uma pessoa com base na idade: criança, jovem, adulto, idoso.</h2>
    <form method="POST">
        <label>Digite sua idade: </label>
        <input type="number" name="idade" id="idade"><br><br>
        <button type="submit">Enviar
            <?php
                $idade = $_POST['idade'];
                $resultado = classificarIdade($idade);
            ?>
        </button>
    </form>
    <h2><?php echo ($resultado); ?></h2>
    <button type="submit"><a href="index.php">Voltar</a></button>
</body>
</html>