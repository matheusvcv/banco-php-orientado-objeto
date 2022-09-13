<?php

	namespace Alura\Banco\Modelo\Funcionario;
	use Alura\Banco\Modelo\{CPF, Pessoa};

		abstract class Funcionario extends Pessoa
		{

			private $cargo;

			private $salario;

				public function __construct(string $nome, CPF $cpf, float $salario)
				{
					parent::__construct($nome, $cpf);

					$this->cargo = $cargo;

				}

				public function setNome($nome): void
				{
					$this-> validaNome($nome);
					$this->nome = $nome;
				}

				public function recuperaSalario():float
				{
					return $this->salario;
				}

				public function calculaBonificacao(): float
				{
					return $this->salario * 0.1;
				}

				public function recebeAumento(float $valorAumento): void
				{
					if ($valorAumento <= 0){

						echo"O valor deve ser positivo";

					return;

					}

					$this->salario += $valorAumento;
				}
				
		}