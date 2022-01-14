<?php
/*
4 - Função SequenciaCrescente($array)
Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

Exemplos para teste 

Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas como TRUE

[1, 3, 2, 1]  false   X
[1, 3, 2]  true  x
[1, 2, 1, 2]  false   X
[3, 6, 5, 8, 10, 20, 15] false X  
[1, 1, 2, 3, 4, 4] false X
[1, 4, 10, 4, 2] false X
[10, 1, 2, 3, 4, 5] true X
[1, 1, 1, 2, 3] false X
[0, -2, 5, 6] true X
[1, 2, 3, 4, 5, 3, 5, 6] false X
[40, 50, 60, 10, 20, 30] false X
[1, 1] true X
[1, 2, 5, 3, 5] true X
[1, 2, 5, 5, 5] false X
[10, 1, 2, 3, 4, 5, 6, 1] false X
[1, 2, 3, 4, 3, 6] true X
[1, 2, 3, 4, 99, 5, 6] true X
[123, -17, -5, 1, 2, 3, 12, 43, 45] true X
[3, 5, 67, 98, 3] true X

*/

//NAO PODE TER MAIS DE 1 VALOR DUPLICADO
function SequenciaCrescente($array){
  $valor = False;
  $tamanhoArray = count($array);

  $copiaArray = array_values($array);

  for($x = 0; $x< $tamanhoArray; $x++){

    unset($copiaArray[$x]);
    // O unset remove o index, logo ficará diferente no final.
    $copiaArrayBackup = array_values($copiaArray);


    //ordenando array para comparação
    $ordenado = array_values($copiaArrayBackup);
    sort($ordenado);

    //removendo duplicatas
    $ordenadoSemDuplicatas = array_unique($ordenado);

   

    if($ordenadoSemDuplicatas === $copiaArrayBackup){
      // está ordenado

      $valor = True;
    }

    // TESTANDO VALOR

  

    $copiaArray = array_values($array);
  }

  return $valor;

}

$array =[3, 5, 67, 98, 3];

$resultado = SequenciaCrescente($array);

if($resultado == True){
  echo "true";
}

if($resultado == False){
  echo "false";
}

 
?>