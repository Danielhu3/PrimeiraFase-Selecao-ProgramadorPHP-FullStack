<?php



function SeculoAno($ano){

  $seculo = ceil($ano / 100);

  return $seculo;


}

$ano = 1701;

$seculo = SeculoAno($ano);

echo $seculo;


?>