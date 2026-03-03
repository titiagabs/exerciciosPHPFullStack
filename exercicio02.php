<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1> Exercício 02 </h1>
    <br>
    <h2> Verifique se um ano é bissexto. </h2>
    <br>
    <form method= "POST">
        <label> Informe o ano: </label>
        <input type="number" name="ano" id="ano"/>
        <br>
        <button type="submit">Calcular</button>
            <?php 
                $ano = $_POST['ano'];
                $resultado = bissexto($ano);
            ?>
        </button>
        <h1>
        <?php 
            echo $resultado; 
        ?>
        </h1>
        <button><a href="index.php">Voltar</a></button>
    </form>  
</body>
</html>