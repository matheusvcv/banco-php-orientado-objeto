<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;


	$conta = new ContaCorrente(new Titular(new CPF('123.456.789-10'), 'Matheus Vinicius', new Endereco('Ocidental', 'Centro', 'Sq15QD17', '56')));

	$conta-> deposita(500);
	$conta-> saca(100);

	echo $conta->recuperaSaldo();