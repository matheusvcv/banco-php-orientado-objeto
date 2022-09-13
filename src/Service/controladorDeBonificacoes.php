<?php

	namespace Alura\Banco\Service;
	use Alura\Banco\Modelo\Funcionario\Funcionario;

		class controladorDeBonificacoes
		{
			private $totalDeBonificacoes = 0;

			public function adicionaBonificacaoDe(funcionario $funcionario)
			{
				$this->totalDeBonificacoes += $funcionario->calculaBonificacao();
			}

			public function getTotal(): float
			{
				return $this->totalDeBonificacoes;
			}
		}