<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício 06</h1>
    <h2>6. Verifique se uma senha digitada é válida</h2>
    <form method="POST">
        <label>Informe sua senha: </label>
        <input type="number" name="senha" id="senha"/>
        <br>
        <button type="submit">Enviar
            <?php
                $senha = $_POST['senha'];
                $resultado = validarSenha($senha);
            ?>  
        </button>
    </form>
    <h1>
            <?php echo $resultado;?>
        </h1>
        <button><a href="index.php">Voltar</a></button>
    
</body>
</html>