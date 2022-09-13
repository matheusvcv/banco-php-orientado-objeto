<?php

	namespace Alura\Banco\Modelo\Funcionario;

	use Alura\Banco\Modelo\Funcionario\Funcionario;


		class Desenvolvedor extends Funcionario
		{
			public function calculaBonificacao(): float
			{
				return 500.0;
			}

			public function sobeDeNivel()
			{
				$this-> recebeAumento($this->recuperaSalario() * 0.75);
			}	
		}