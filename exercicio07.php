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
            <input type="number" name="senha" id="senha"/>
            <br>
            <button type="submit">Enviar
                <?php
                    $senha = $_POST['senha'];
                    $resultado = validarSenha($senha);
                ?>  
            </button>
        </form>
    
</body>
</html>