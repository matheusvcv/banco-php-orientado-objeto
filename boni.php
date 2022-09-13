<?php

	require_once 'autoload.php';

	use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};
	use Alura\Banco\Service\controladorDeBonificacoes;
	use Alura\Banco\Modelo\CPF;

	$umFuncionario = new Desenvolvedor('Matheus', new CPF ('064.417.251-77'), 'Desenvolvedor', '1000');

	$umaFuncionaria = new Gerente('Ilka Costa', new CPF('164.417.251-77'), 'Gerente', '3000');


	$umDiretor = new Diretor('Junito Jones', new CPF('555.666.777-00'), 'Diretor', 5000);

	$umFuncionario-> sobeDeNivel();

	$controlador = new controladorDeBonificacoes;

	$controlador-> adicionaBonificacaoDe($umFuncionario);
	$controlador-> adicionaBonificacaoDe($umaFuncionaria);
	$controlador-> adicionaBonificacaoDe($umDiretor);

	echo $controlador-> getTotal();
