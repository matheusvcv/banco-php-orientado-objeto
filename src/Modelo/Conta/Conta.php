<?php

    namespace Alura\Banco\Modelo\Conta;
    
        abstract class Conta
        {
            private $titular;
            protected $saldo;
            private static $numeroDeContas = 0;

            public function __construct(Titular $titular)
            {
                $this->titular = $titular;
                $this->saldo = 0;

                self::$numeroDeContas++;
            }

            public function __destruct()
            {
                self::$numeroDeContas--;
            }

            public function saca(float $valorASacar): void
            {
                
                $tarifa = $valorASacar * $this-> percentualTarifa();
                $valorSaque = $valorASacar + $tarifa;

                if($valorSaque <= 0) {

                    echo"O valor do saque precisa ser positivo";

                    return;
                }

                $this->saldo -= $valorSaque;
            }

            public function deposita(float $valorADepositar): void
            {
                if ($valorADepositar < 0) {
                    echo "Valor precisa ser positivo";
                    return;
                }

                $this->saldo += $valorADepositar;
            }

           
            public function recuperaSaldo(): float
            {
                return $this->saldo;
            }

            public function recuperaNomeTitular(): string
            {
                return $this->titular->getNome();
            }

            abstract protected function percentualTarifa():float;


            public static function recuperaNumeroDeContas(): int
            {
                return self::$numeroDeContas;
            }
        }
