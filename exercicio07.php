<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício 07</h1>
    <h2>7. Leia 2 horários e determine qual é mais tarde.</h2>
    <form method="POST">
        <label>Informe o primeiro horário: </label>
        <input type="real" name="primeiro" id="primeiro"/>
        <br><br>
        <label>Informe o segundo horário: </label>
        <input type="real" name="segundo" id="segundo"/>
        <br><br>
        <button type="submit">Enviar
        <?php
            $primeiro = $_POST['primeiro'];
            $segundo = $_POST['segundo'];
            $resultado = maiorHorario($primeiro,$segundo);
        ?>  
            </button>
            <h1>
                <?php echo $resultado; ?>
            </h1>
        </form>
        <button><a href="index.php">Voltar</a></button>
    
</body>
</html>