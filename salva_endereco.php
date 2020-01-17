<?php
//PASSO 1: CAPTURANDO INFOS DO GET
$numero = $_GET['numero'];
$cep = $_GET['cep'];

//PASSO 2: LEVANTAR AS INFORMAÇÕES DA LOCALIDADE A PARTIR DO CEP 
$str = file_get_contents("http://viacep.com.br/ws/$cep/json/");

//Passo 2.1: TRANSFORMANDO A STRING JSON EM UM ARRAY ASSOCIATIVO COM JSON_DECODE
$endereço = json_decode($str, true);
print_r($endereço);

//Passo 3: Adicionar o número do endereço às infos
$endereço['complemento'] = $numero;

//Passo 3.1: Transformar o array assoc $endereço de volta para um string
$str = json_encode($endereço);

//Passo 4: Salvar as infos num arquivo
file_put_contents('endereco.json', $str);


echo $str;

echo('<pre>');
print_r($endereço);
echo('</pre>');
die
?>