
Ainda em teste

<?php
$valor = $_GET['valor'];

$ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='08-14-2020'&format=json");

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
        <h1><b>Conversor de Moedas v2.0</b></h1>
        <?php echo "<p>Seus R$ " . number_format($valor, 2, ',', '.') .
            " </p> equivalem <b>" . $ch;
        ?>
    </main>
</body>

</html>
