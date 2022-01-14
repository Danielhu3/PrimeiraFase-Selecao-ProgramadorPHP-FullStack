<?php 
/*
2 -Função Primos($inicial,$final)
Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, desprezando o número inicial e final recebidos como parâmetro. 

Exemplo para teste:

Numero Inicial = 10
Número Final = 29
Resposta: Encontrados 5 números primos, são eles: 11,13,17,19,23 

*/

function Primos ($inicial, $final){

  $listaPrimos = [];
  $acum = 0;
  
  //percorrer do n inicial até o final
  for($i = $inicial; $i<=$final; $i++){
    // $i é o valor a ser testado

    for($j = 1; $j<= $i; $j++){
    //$j é o divisor
      if($i % $j == 0){
        $acum = $acum +1;
      }
    }

    if($acum == 2){

      array_push($listaPrimos,$i);
      
      
    }
    $acum = 0;

  }

  return $listaPrimos;

}

// valores de teste

$inicial = 10;
$final = 29;

$listaPrimos = Primos($inicial,$final);

var_dump($listaPrimos);


?>