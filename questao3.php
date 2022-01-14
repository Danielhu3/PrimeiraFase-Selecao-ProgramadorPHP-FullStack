<?php

/*

3 - Escreva um programa
Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.

Exemplo

Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
Os números que não se repetem são o 4 e 7. 

*/

function Random(){

  $lista = [];
  $verificar = [];
  $naoRepetidos = [];
  //substituir pra 20
  for($x = 0; $x<20; $x++){

    array_push($lista,random_int(1,10));
  }

  var_dump($lista);

  //exibir quantidade de aparições dos números
  echo "Quantidade de aparições dos números: <br>";
  $verificar = array_count_values($lista);
  var_dump($verificar);


  foreach($verificar as $campo => $valor){

    if($valor == 1){
      array_push($naoRepetidos,$campo);
    }
  }

  return $naoRepetidos;
 
}

$naoRepetidos = Random();

echo "Os valores não repetidos são: <br>";
var_dump($naoRepetidos);


?>