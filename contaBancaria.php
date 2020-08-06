<?php

class venda 
{
     private $data;
     private $produto;
     private $quantidade;
     private $valorTotal;

     public function __construct($data, $produto, $quantidade, $valorTotal) {

          $this->$data = $data;
          $this->$produto = $produto;
          $this->$quantidade = $quantidade;
          $this->$valorTotal = $valorTotal;

     }

     public function exibirVenda() 
     {
         // echo 'A venda do produto '. $produto .' na data '. $data .' com a quantidade de '. $quantidade .' possui um valor cada de '. $valorTotal;
          return 'A venda do produto '. $this->produto .' na data '. $this->data .' com a quantidade de '. $this->quantidade .' possui um valor cada de '. $this->valorTotal;
     }


}

$venda = new Venda(
     '02-05-2020',
     'Chaveiro',
     '5',
     20.00
);

echo $venda->exibirVenda();


//var_dump($venda);


/*
class contaBancaria
{
     // public - private - protected

     private $banco;
     private $nomeTitular;
     private $numeroAgencia;
     private $numeroConta;
     private $saldo;

     public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
     {

          $this->$banco = $banco;
          $this->$nomeTitular = $nomeTitular;
          $this->$numeroAgencia = $numeroAgencia;
          $this->$numeroConta = $numeroConta;
          $this->$saldo = $saldo;


     }

     public function obterSaldo()
     {
          return 'Seu saldo atual é: R$' . $this->saldo;
     }

     public function depositar($valor)
     {
          $this->saldo += $valor;
          return 'Deposito de R$ '. $valor . ' Realizado com sucesso!';
     }

     public function sacar($valor)
     {
          $this->saldo -= $valor;
         return 'Saque de R$ ' . $valor . ' Realizado com sucesso!';
     }
}

$conta = new contaBancaria(
     'Banco do Brasil', // banco
     'Lucas Formigon', // nomeTitular
     '2511', // numeroAgencia
     '01257-9', // numeroConta
     0 // saldo
);

var_dump($conta);

$conta1 = new contaBancaria(
     'Nubank S.A', // banco
     'Kimberly Bastos', // nomeTitular
     '0001', // numeroAgencia
     '58934-1', // numeroConta
     0 // saldo
);

var_dump($conta1);


echo $conta->obterSaldo(); // 0

echo '<br>';

echo $conta->depositar(300.00);

echo '<br>';

echo $conta->obterSaldo(); // 300

echo '<br>';

echo $conta->sacar(150.00);

echo '<br>';

echo $conta->obterSaldo(); // 150
*/

