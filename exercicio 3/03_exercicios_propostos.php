<?php

/***************
* Exercício 01 *
***************/
echo "Exercício 01: ";

function capitaliza($string) {

	for($x=0; $x<strlen($string); $x++) {
    // Capitaliza a primeira letra (posição 0)
		if($x == 0) {
			$string = strtoupper(substr($string, 0, 1)) . substr($string, 1);
		}
		else {
		
		  // Se não for a primeira letra, verifica se a letra anterior era um espaço em branco
			if(substr($string, $x-1, 1) == " ") {
				$string = substr($string, 0, $x) . strtoupper(substr($string, $x, 1)) . substr($string, $x + 1);
			}
		}
	}
	return $string;
	
}
echo capitaliza("exemplo de string para ser capitalizada");

echo "<BR><BR>";



/***************
* Exercício 02 *
***************/
echo "Exercício 02: ";

function minha_strrev($string) {

	$resultado = "";
	
  // Loop de navegação construído de trás para frente em sua navegação de posições 
	for($x=strlen($string) - 1; $x>=0; $x--) {
		$resultado .= substr($string, $x, 1);
	}
	return $resultado;
	
}
echo minha_strrev("Exemplo de string");

echo "<BR><BR>";



/***************
* Exercício 03 *
***************/
echo "Exercício 03: ";

function minha_strpos($string, $busca, $posicaoInicial = 0) {

  // Ao navegar por toda a string...
	for($x=$posicaoInicial; $x<strlen($string); $x++) {

    // ...verifica se a string formada da posição atual em diante tem o mesmo valor da string procurada
		for($y=0; $y<strlen($busca); $y++) {
			if(substr($string, $x + $y, 1) != substr($busca, $y, 1))
				break;
			else if($y == strlen($busca) - 1)
				return $x;
		}
	}

	return false;
}
echo minha_strpos("Exemplo de string", "em");

echo "<BR><BR>";



/***************
* Exercício 04 *
***************/
echo "Exercício 04: ";

function minha_strchr($string, $busca) {

	$x = strpos($string, $busca);
	
	if($x !== false) {
    return substr($string, $x);
  }
  else {
	 return false;
	}
	
}
echo minha_strchr("Exemplo de string de teste", "de");

echo "<BR><BR>";



/***************
* Exercício 05 *
***************/
echo "Exercício 05: ";

function minha_strrchr($string, $busca) {

	$x = strpos($string, $busca);
	
	if($x === false) {
    return false;
	}
	
	do {
    $y = strpos($string, $busca, $x+1);
    
    /*
    * A função strpos pode retornar FALSE, 0 ou vazio. Para garantir o correto
    * funcionamento do comando if (ou outra operação boleana) é necessário
    * comparar o seu retorno com o operador === ou !==, que verifica se o valor
    * em questão é identico (e do mesmo tipo) que o esperado nestas operações            
    */    
    if($y !== false) {
      $x = $y;
    }
    else {
      // Se $y retornou false, indica que o valor em $x é o da última ocorrência
      return substr($string, $x);
    }
  } while($y !== false);
	
}
echo minha_strrchr("Exemplo de string de teste", "de");

echo "<BR><BR>";

?>
