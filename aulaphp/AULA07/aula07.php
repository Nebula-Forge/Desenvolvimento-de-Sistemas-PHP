<?php 

    echo "<h1>Strings</h1>";

    function quebra(){
        echo "\n<br>\n";
    }

    $str = 'uma string';
    echo $str[-2];

    quebra();
    $str[4] = "A";
    echo "<br>" . $str;

    quebra();
    echo "<br>" . $str[1] . "atheus \n Paulo";

    quebra();
    $tamanho = strlen($str);
    echo "Tamanho: " . $tamanho;

    for ($i=0; $i < $tamanho; $i++) { 
        echo "<br> > " . $str[$i] . " < ";
    }

    quebra();
    echo "<br> eu sou feliz";
    echo '<br> eu sou feliz';

    quebra();
    echo "<br> vamo \n embora";
    echo '<br> vamo \n embora';
    
    quebra();
    $videogame = "sonic";
    echo "<br> Estou jogando: {$videogame}";
    echo '<br> Estou jogando: {$videogame}';

    quebra();
    echo "<br>this isn't";
    echo '<br>this isn\'t';

    quebra();
    echo "<br> Deletar disco C:\\";
    echo "<br> Deletar disco C:\\usuario\\nathan";


    quebra();
    function soma($a, $b){
        return $a + $b;
    }

    $num = soma(10, 25);
    echo "<br>O resultado da soma é $num.";
    echo "<br>O resultado da soma é {$num}.";
    
    echo '<br>O resultado da soma é $num.';
    echo '<br>O resultado da soma é {$num}.';

    echo "<br>O resultado da soma é soma(10, 25).";
    echo "<br>O resultado da soma é {soma(10, 25)}.";
    echo "<br>O resultado da soma é " . soma(10, 25) . ".";

    $cores = ["Roxo", "Amarelo", "Cinza"];
    echo "<br> Valor do Array: {$cores[1]}";
    echo "<br> Valor do Array: " . $cores[2] . ".";

    $a = 10;
    $$a = 20;
    $valor = 50;
    echo "<br> Valor {$a} -- Valor {$$a} -- R\$$valor";


    quebra();

    $heredoc = <<<NOMEFELIZ

        <h2>O titulo da pagina</h2>
                <p> O texto
                da página </p>
        
    <p> Valor R$ {$valor} </p>

    NOMEFELIZ;

    echo $heredoc;


    $nowdoc = <<<'OUTRONOME'

    <h2>O titulo da pagina</h2>
                <p> O texto
                da página </p>
        
    <p> Valor R$ {$valor} </p>

    OUTRONOME;

    echo $nowdoc;

    quebra();

    $str = "123naskdhkjs";
    $tamanho = strlen($str);
    echo "<br>String: {$str}";
    echo "<br>Tamanho: {$tamanho}";
    
    quebra();
    $str = "Janela";
    $parte = substr($str, 3, 6);
    echo "<br>String: {$str}";
    echo "<br>Parte: {$parte}";
    
    echo "<br>Maiusculo: " . strtoupper($parte);
    echo "<br>Minusculo: " . strtolower($str);

    $nova = str_replace("la", "linha", $str);
    echo "<br>Nova: {$nova}";

    /*
        number_format() // formatar um numero
        printf() // imprime e formata
        
        print_r() // mostra o array
        var_dump() // mostra o array e o tipo da variavel

        ltrim() // remove espaços
        rtrim()
        trim()
    
        str_word_count() // contagem das palavras
        explode() // quebrar as palavras $arr = ["eu", "estou", "com", "fome"]
        str_split() 
        implode($arr) // o oposto "eu estou com fome"
        join()

        strtoupper() // TUDO MAIUSCULO
        strtolower() // todo minusculo
        ucfirst() // Só essa maiúsculo
        ucwords() // As Palavras Desse Jeito

        strrev() // "danilo" -> "olinad"
        strpos() // "rafael" -> "ae" -> 3
        stripos() // "rafael" -> "AE" -> 3

    
    */

    quebra();
    $nome = "gabriel lincon demetrio silva pereira";
    $nome = explode(" ", ucwords(strrev($nome)));
    echo print_r($nome);

    quebra();
    quebra();
    // $input = "Alien";
    // echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-----Alien"
    // echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"

    function titulo($texto, $char){
        $tamanho = 10 + strlen($texto);

        echo "\n<br><h2>";
        echo str_pad(" ", $tamanho, $char, STR_PAD_BOTH);
        echo "<br>";
        echo str_pad($texto, $tamanho, $char, STR_PAD_BOTH);
        echo "<br>";
        echo str_pad(" ", $tamanho, $char, STR_PAD_BOTH);
        echo "</h2><br>\n";
    }

    titulo("Exercicio 2", "*");
    titulo("Exercicio 3", "-");
    titulo("oi", "&");

?>
