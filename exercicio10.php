<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício 10</h1>
    <h2>10. Solicite senhas até que uma válida seja informada.</h2>
    <form method="POST">
        <label>Informe a senha: </label>
        <input type="number" name="senha" id="senha"><br>
        <button type="submit">Enviar
        <button><a href="index.php">Voltar</a></button>
    <?php
        $senha= $_POST['senha'];
        $resultado= senhaValida($senha);
    ?>
    </form>
    <?php echo $resultado; ?>
</body>
</html>