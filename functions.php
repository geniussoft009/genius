<?php
if($_GET['type'] == "buscaCep") {
    //$cep2 = $_GET[selecFilial];

    $cep = $_GET['cepDigitado'];
    if ($cep != null){
        $cep = preg_replace("/[^0-9]/","",$cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";

        $xml = simplexml_load_file($url);
        //var_dump(getEndereco("03907010"));
        $endereco = $xml->logradouro;
        $bairro   = $xml->bairro;
        $cidade   = $xml->localidade;
        $uf       = $xml->uf;
        echo $endereco . ";" . $bairro . ";" . $cidade . ";" . $uf;
    }
}