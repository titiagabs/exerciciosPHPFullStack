<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <h1>Exercício 17</h1>
    <?php include("funcoes.php"); ?>
    <h2>17. Verifique se um número é múltiplo de 3 e de 5 ao mesmo tempo.</h2>
    <form method="POST">
        <label>Digite um número : </label>
        <input type="number" name="numero" id="numero"><br>
        <button type="submite">Enviar
            <?php
                $num = $_POST['numero'];
                $resultado = numMult($num);
            ?>
        </button><br>
        <h3><?php echo $resultado; ?></h3>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>