<pre><?php 
    // link bcd.gov.br
    $inicio= date('m-d-Y', strtotime("-7 days")); //pegando a data de sete dias atrás
    $fim=date("m-d-Y");
    $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';//vou mudar a data, a data estacva um valor fixo e vou colocar minha variaves
    $dados=json_decode(file_get_contents($url), true); // true é para deixar em valor de array e se colocar em false coloca em valor de objeto;
    var_dump($dados);

    $cotação= $dados['value'][0]['cotacaoCompra'];
    echo $cotação;
?></pre>