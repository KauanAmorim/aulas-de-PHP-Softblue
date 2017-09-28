<?php

/***************
* Exercício 01 *
***************/
echo "Exercício 01: ";

function mediaDeArray($notas, $pesos) {
	$resultado = 0;

	for($x=0; $x<sizeof($notas); $x++) {
		$resultado += ($notas[$x] / 10) * $pesos[$x];
	}
	
	return $resultado;

}
echo mediaDeArray(array(7, 8, 10), array(2, 3, 5));

echo "<BR><BR>";



/***************
* Exercício 02 *
***************/
echo "Exercício 02: ";

function inverteArray($array) {
	$novoArray = array();

	for($x=sizeof($array) - 1; $x>=0; $x--) {
		$novoArray[sizeof($array) - 1 - $x] = $array[$x]; 
	}
	
	return $novoArray;

}
print_r(inverteArray(array("a", "b", "c", "d")));

echo "<BR><BR>";



/***************
* Exercício 03 *
***************/
echo "Exercício 03: ";

function tamanhoDeArray($array) {
	$x = 0;
	foreach($array as $posicao) {
		$x++;
	}
	return $x;
}
echo tamanhoDeArray(array(1, 2, 3));

echo "<BR><BR>";



/***************
* Exercício 04 *
***************/
echo "Exercício 04: ";

function maiorNumero($array) {

    $maiorNumero = $array[0];
    $posicao = 0;

	for($x=1; $x<sizeof($array); $x++) {
	
        if($array[$x] > $maiorNumero) {
            $maiorNumero = $array[$x];
            $posicao = $x;
        }
	}
	
	return $posicao;
}
$a = array(1, 2, 3, 7, 4, 5);
$x = maiorNumero($a, 4);
echo "O maior número é o ".$a[$x]." que está na posição ".$x;

echo "<BR><BR>";




/***************
* Exercício 05 *
***************/
echo "Exercício 05: ";

function parImpar($array) {

	for($x=0; $x<sizeof($array); $x++) {
	
        if($array[$x] % 2 == 0) {
            $array[$x] = "P";
        }
        else {
            $array[$x] = "Í";
        }
	}
	
	return $array;
}
$a = array(1, 2, 3, 7, 4, 5);
$x = parImpar($a);
print_r($x);

echo "<BR><BR>";




/***************
* Exercício 06 *
***************/
echo "Exercício 06: ";

function buscaSubstring($array, $substring) {

    // Para fazer busca sem considerar case-sensitive (maiúsculo/minúsculo)
    // Converte-se ambas as strings para o mesmo padrão (caixa baixa ou alta)
    // Neste exercício, optei por caixa baixa, assim ao procurar 'ba' na
    // palavra 'Basquete', com a inicial 'B' maiúscula, funcionará também
    
    // Converte a substring a ser pesquisada para minúsculo
    $substringLower = strtolower($substring);

	for($x=0; $x<sizeof($array); $x++) {
	
	    // Converte o elemento a ser pesquisado para minúsculo
	    $elemento = strtolower($array[$x]);
		
        if(strpos($elemento, $substringLower) !== false) {
            echo "Encontrada ocorrência '".$substring."' em '".$array[$x]."' <br>";
        }
	}
	
}
$a = array("Basquete", "Futebol", "Banana", "Laranja", "Ali Baba");
buscaSubstring($a, "ba");

echo "<BR><BR>";



?>
