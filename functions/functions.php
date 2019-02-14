<?php
if($_GET['type'] == "buscaCep") {
    //$cep2 = $_GET[selecFilial];

    echo "oii " . $_GET['selecFilial'];
    header('Location: menu.php');
    //$cep = "03907010";
    //$cep = preg_replace("/[^0-9]/","",$cep);
    //$url = "http://viacep.com.br/ws/$cep/xml/";

    //$xml = simplexml_load_file($url);
    //var_dump(getEndereco("03907010"));
    //$endereco = $xml->logradouro;
    //echo $endereco;

}