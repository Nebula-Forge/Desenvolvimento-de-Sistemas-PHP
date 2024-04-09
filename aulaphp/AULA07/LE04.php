<?php
	// Exercicio 1

	echo "<br> Exercicio 1 <br>";

	$str = "Brasil Hexa 2006";
	$str2 = "Brasil! Hexa 2006!";

	echo "<br> String1: {$str}";
	echo "<br> String2: {$str2}";

	echo "<br> Tamanho String1: ". strlen($str);
	echo "<br> Tamanho String2: ". strlen($str2);

	if (strlen($str) == strlen($str2)) {
		echo "<br> O tamanho das duas strings são iguais!";
	} else {
		echo "<br> O tamanho das duas strings são diferentes!";
	}

	if ($str == $str2) {
		echo "<br> As strings tem conteudo iguai!";
	} else {
		echo "<br> As strings tem conteudo diferente!";
	}

	//Exercicio 2 

	$nome = "Daniel";

	echo "<br> <br> Exericio 2 <br>";

	echo "<br>Nome Invertido: " . strtoupper(strrev($nome));



	//Exercicio 3

?>