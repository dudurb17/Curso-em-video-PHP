<?php

$valor = $_GET['valor']?? 0;
const DOLAR = 5.05;
$money = $valor / DOLAR;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p>Seu R$ <?php echo number_format($valor, 2, ",", ".") .
                        "  equivalem a US$ " . number_format($money, 2, ',', '.'); ?></p>
        <?php echo "<b>Cotação fixa de R$" . number_format(DOLAR, 2, ",", ".") . "</b> informada diretamente no codigo" ?>
        <button onclick="window.location.href = 'index.html'">Voltar</button>


    </main>

</body>

</html>