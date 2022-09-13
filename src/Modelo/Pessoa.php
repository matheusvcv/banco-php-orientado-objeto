<?php
	
	namespace Alura\Banco\Modelo;

		class Pessoa
		{
			protected string $nome;

			private Cpf $cpf;

				public function __construct(string $nome, CPF $cpf)
				{
					
					$this-> validaNome($nome);

					$this->nome = $nome;

					$this->CPF =$cpf;
				}

				public function getNome(): string
				{
					return $this->nome;
				}

				public function getCPF(): CPF
				{
					return $this->cpf->recuperaNumero();
				}

				protected function validaNome($nome)
				{
					if (strlen($nome) < 0) {

						echo"O nome deve ter ao menos 05 caracteres!";

						exit();

					}
				}
		}