<?php

require_once 'autoload.php';

    use Alura\Banco\Modelo\Conta\Titular;
    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Modelo\Conta\Conta;   
 
$endereco1= new Endereco('Ocidental', 'Centro', 'Sq15', '56');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco1);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;


echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco1);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco1));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
