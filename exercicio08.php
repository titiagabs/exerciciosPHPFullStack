<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercício 08</h1>
    <h2>8. Leia 5 números e calcule a média:</h2>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type='number' name='primeiro' id='primeiro'><br>
        <label>Informe o segundo número: </button>
        <input type='number' name='segundo' id='segundo'><br>
        <label>Informe o terceiro número: </button>
        <input type='number' name='terceiro' id='terceiro'><br>
        <label>Informe o quarto número: </button>
        <input type='number' name='quarto' id='quarto'><br>
        <label>Informe o quinto número: </button>
        <input type='number' name='quinto' id='quinto'><br><br>
            <?php
                $primeiro  = $_POST['primeiro'];
                $segundo   = $_POST['segundo'];
                $terceiro  = $_POST['terceiro'];
                $quarto    = $_POST['quarto'];
                $quinto    = $_POST['quinto'];
                $resultado = calcularMedia($primeiro, $segundo, $terceiro, $quarto, $quinto);
            ?>
            <h3> <?php echo $resultado; ?> </h3>
            <br>
        <button type='submit'>Enviar
        </button>
        <button type="submit"><a href="index.php">Voltar</a></button>
</body>
</html>