<?php

        $valor = $_GET['valor']?? 0;
        
        // link bcd.gov.br
        $inicio= date('m-d-Y', strtotime("-7 days")); //pegando a data de sete dias atrás
        $fim=date("m-d-Y");
        $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';//vou mudar a data, a data estacva um valor fixo e vou colocar minha variaves
        $dados=json_decode(file_get_contents($url), true); // true é para deixar em valor de array e se colocar em false coloca em valor de objeto;
        $cotação= $dados['value'][0]['cotacaoCompra'];
        $money = $valor/$cotação ;


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
        <?php echo "<b>Cotação do dia de R$" . number_format( $cotação, 2, ",", ".") . "</b> informada diretamente no codigo" ?>
        <button onclick="window.location.href = 'index.html'">Voltar</button>


    </main>

</body>

</html>