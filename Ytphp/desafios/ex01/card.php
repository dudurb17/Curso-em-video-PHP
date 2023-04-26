<?php
$num = $_GET['num'];
$ant = $num - 1;
$sc = $num + 1;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link href="/your_path_to_version_6_compiled_files/css/fontawesome.css" rel="stylesheet">
    <title>Desafios PHP</title>
</head>

<body>
    <main>
        <h1><b>Resultado Final</b></h1>
        <?php
        echo '<p>O número escolhido foi <b>' . $num . '</b></p>';
        echo '<p>O seu antecessor é <b>' . $ant . '</b></>';
        echo '<p>O seu sucessor é <b>' . $sc  . '</b></p>';
        ?>
        <button onclick="history.go(-1);">
            &larr; Voltar
        </button>
    </main>
</body>

</html>