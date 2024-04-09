<?php

	echo "<h1>Strings</h1>";

	function quebra(){
		echo "<br>";
	}

	$str = "uma string"; // aspas duplas ou simples
	echo $str[2]; //imprime um caractere

	// quebra();
	// $str[4] = "A";
	// echo "<br>" . $str;

	quebra();
	echo "<br>" . $str[1] . "ateus Paulo";

	quebra();
	$tamanho = strlen($str);
	echo "Tamanho: " . $tamanho;

	quebra();
	for ($i=0; $i < $tamanho; $i++) {
		echo "<br> - " . $str[$i];
	}

	quebra();
	echo "<br> eu sou feliz";
	echo '<br> eu sou feliz';

	echo "<br> vamo \n embora";
	echo '<br> vamo \n embora';

	quebra();
	$videogame = "sonic";
	echo "<br> Estou jogando: {$videogame}";
	echo '<br> Estou jogando: {$videogame}';

	quebra();
	echo "<br> this isn't";
	echo '<br> this isn\'t';

	quebra();
	echo "<br> Deletar disco C:\\";
	echo "<br> Deletar disco C:\\usuario\\nathan";

	quebra();
	function soma($a,$b) {
		return $a + $b;
	}

	$num = soma(10,25);
	echo "<br>O resultado da soma é $num.";
	echo "<br>O resultado da soma é {$num}.";

	echo '<br>O resultado da soma é $num.';
	echo '<br>O resultado da soma é {$num}.';
	
	echo "<br>O resultado da soma é soma(10, 25).";
	echo "<br>O resultado da soma é {soma(10, 25)}.";
	echo "<br>O resultado da soma é " . soma(10, 25) . ".";

	quebra();
	$cores = ["Roxo", "Amarelo", "Cinza"];
	echo "<br> Valor do Array: {$cores[1]}";
	echo "<br> Valor do Array: ". $cores[2] . ".";

	quebra();
	$a = 10;
	$$a = 20;
	$valor = 1000;
	echo "<br> Valor {$a} -- Valor {$$a} -- R\$$valor";

	quebra();
	// heredoc
	
	$heredoc = <<<NOMEFELIZ
		<h2>O titulo da pagina</h2>
		<p> O texto da pagina </p>
		<p> Valor R$ {$valor} </p>
	NOMEFELIZ;

	echo $heredoc;

	// $nowdoc =  = <<< OUTRONOME

	// <h2>O Titulo da pagina</h2>
	// <p> O Texto da pagina </p>
	// <p> R$ {$valor} </p>

	// OUTRONOME;

	// echo $nowdoc;

	quebra();
	$str = "123naskdhkjs";
	$tamanho = strlen($str);
	echo "<br>String: {$str}";
	echo "<br>Tamanho: {$tamanho}";

	quebra();
	$str = "Janela";
	$parte = substr($str, 3, 6);
	echo "<br>String: {$str}";
	echo "<br>Tamanho: {$parte}";
	echo "<br>Maiusculo: ". strtoupper($parte);
	echo "<br>Minusculo: ". strtolower($parte);

	$nova = str_replace("la", "linha", $str);
	echo "<br>Nova: {$nova}";

	/*
		number_format() // formatar um numero
		printf() // imprime e formata

		print_r() // mostra o array
		var_dump() // mostra o array e o tipo da variavel
	
		ltrim() // remove espaços a esquerda do texto
		rtrim()	// remove espaços a direita do texto
		trim() // remove espaços do texto

		str_word_count() // contagem das palavras

		explode() // quebrar as palavras ["eu", "estou", "com", "fome"]
		str_split() // quebrar as palavras ["eu", "sou", "o", "caçador"]

		implode() // o oposto "eu estou com fome"
		join() // o oposto ""

		strtoupper() // TUDO MAIUSCULO
		strtolower() // tudo minusculo
		ucfirst() // Só a primeira maiuscula
		ucwords() // As Palavras Desse Jeito
	
		strrev() // iverte a string "danilo" -> "olinad"

		strpos() // Retorna a posição: "rafael" -> "ae" -> 3
		stripos() // Retorna a posição case insensitive: "rafael" -> "AE" -> 3
	*/

?>