<?php

/***************
* Exerc�cio 01 *
***************/
echo "Exerc�cio 01: ";

for($x=1; $x<=100; $x++) {
	echo $x . " ";
}

echo "<BR><BR>";



/***************
* Exerc�cio 02 *
***************/
echo "Exerc�cio 02: ";

for($x=1; $x<=100; $x++) {
	if($x % 3 == 0) {
		echo $x . " ";
	}
}

echo "<BR><BR>";



/***************
* Exerc�cio 03 *
***************/
echo "Exerc�cio 03: ";

$resultado = 0;
for($x=50; $x<=100; $x = $x + 2) {
	$resultado += $x;
}
echo $resultado;

echo "<BR><BR>";



/***************
* Exerc�cio 04 *
***************/
echo "Exerc�cio 04: ";

/*
* Esta solu��o utiliza um recurso chamado 'recurs�o' onde uma fun��o
* invoca ela mesma dentro de seu bloco de c�digo. A id�ia neste algoritmo
* � ir chamando recursivamente a mesma fun��o at� atingir o valor 1,
* pois fatorial de 1 retorna 1 mesmo, e a partir deste retorno ir somando
* com os demais retornos das invoca��es anteriores.
*/

function fatorial($numero) {
	if($numero == 1)
		return 1;
	else
		return $numero * fatorial($numero - 1);
}

echo fatorial(4);

echo "<BR><BR>";



/***************
* Exerc�cio 05 *
***************/
echo "Exerc�cio 05: ";

function calculaMedia($nota1, $nota2, $nota3, $peso1, $peso2, $peso3) {
	$resultado = (($nota1 / 10) * $peso1) + (($nota2 / 10) * $peso2) +(($nota3 / 10) * $peso3);
	return $resultado;
}

echo calculaMedia(10, 9, 8, 3, 2, 5);

echo "<BR><BR>";



/***************
* Exerc�cio 06 *
***************/
echo "Exerc�cio 06: ";

/*
* Para implementar a f�rmula de fibonacci novamente foi utilizado o recurso
* de 'recurs�o' na constru��o da fun��o em quest�o.
*/

function fibonacci($i) {
	if($i < 2) {
		return $i;
	}

	else {
		return fibonacci($i-1) + fibonacci($i-2);
	}
}

for($i=1; $i<=10; $i++) {
    echo fibonacci($i) . " ";
}

echo "<BR><BR>";



/***************
* Exerc�cio 07 *
***************/
echo "Exerc�cio 07: ";

function somaDeIntervalo($x, $y) {
	$resultado = 0;
	for($i=$x; $i<=$y; $i++) {
		$resultado += $i;
	}
	return $resultado;
}

echo somaDeIntervalo(5, 10);

echo "<BR><BR>";



/****************
* Exerc�cio 08  *
* Utilizando if *
****************/
echo "Exerc�cio 8 (if): ";

function minhaFuncaoIf($x) {

	if($x % 2 == 0) {
		$y = $x / 2;
	}
	else {
		$y = 3 * $x + 1;
	}

	echo $y . " ";

	if($y != 1)
		minhaFuncaoIf($y);
}

minhaFuncaoIf(13);

echo "<BR><BR>";



/********************
* Exerc�cio 08      *
* Utilizando switch *
********************/
echo "Exerc�cio 08 (switch): ";

function minhaFuncaoSwitch($x) {

	switch($x % 2) {
		case 0:
			$y = $x / 2;
			break;
		default:
			$y = 3 * $x + 1;
			break;
	}

	echo $y . " ";

	if($y != 1)
		minhaFuncaoSwitch($y);
}

minhaFuncaoSwitch(13);

?>
