<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercício 05</h1>
    <h2>5. Leia um número de 1 a 7 e mostre o dia da semana</h2>
    <form method="POST">
        <label>Informe um dia da semana: </label>
        <input type="number" name="dia" id="dia"/>
        <br>
        <button type="submit">Enviar
            <?php
                $num = $_POST['dia'];
                $resultado = diaDaSemana($num);
            ?>
        </button>
    </form>
    <h1>
        <?php echo "O dia da semana é: $resultado"; ?>
    </h1>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>