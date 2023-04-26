<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET['nome'] ?? "Sem nome";
        $sobrenome = $_GET['sobrenome'] ?? "Desconhecido";
        echo "<p> É um prazer te conhecer, <b>$nome $sobrenome</b>! Este é meu site</p> "

        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>

</html>