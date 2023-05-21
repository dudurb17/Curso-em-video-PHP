<?php $num = mt_rand(0, 100);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="/your_path_to_version_6_compiled_files/css/fontawesome.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main>

        <h1><b>Trabalhando com números aleatórios</b></h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <p>O valor gerado foi <?php echo "<b>$num </b>" ?></p>
        <button onclick="location.reload()">Gerar outro</button>

    </main>

</body>

</html>