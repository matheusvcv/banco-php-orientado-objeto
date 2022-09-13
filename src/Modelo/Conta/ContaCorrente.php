<?php

	namespace Alura\Banco\Modelo\Conta;

		class ContaCorrente extends Conta
		{
			protected function percentualTarifa():float
			{
				return 0.05;
			}

			public function transfere(float $valorTransf, Conta $contaDestino)
			{
				if ($valorTransf > $this->saldo){

					echo"Você não possui saldo suficiente para realizar essa tranferência.";

					return;
				}

				$this->Saca($valorTransf);
				$contaDestino->deposita($valorTransf);
			}
		}