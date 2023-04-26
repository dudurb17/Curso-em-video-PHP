<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //sao variaveis
    $nome = "Eduardo";
    $sobrenome = "Bedin";
    //uma constante, nao varia
    const PAIS = "Brasil";
    //podem pode variar de valor
    $nome = "Eduardo";
    $sobrenome = "Bedin";

    #PAIS="EUA"; isso vai dar erro

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    ?>
</body>

</html>