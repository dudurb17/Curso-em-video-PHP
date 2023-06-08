<?php 
    $num=$_POST["valor"]?? 0;
    $numF=floor($num);
    $parteFracionada=$num-$numF;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <p>Analisando o número <b><?php echo number_format($num,3, ",",".") ;?></b> informado pelo usuário:</p>
        <p>&bull;A parte inteira do número é <b><?php echo number_format($numF, 0, ",",".") ;?></b></p>
        <p>&bull;A parte fracionada do número é <b><?php echo number_format($parteFracionada,3, ",",".");?></b></p>
        <button onclick="window.location.href = 'index.html'">Voltar</button>
    </main>
</body>

</html>