<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Resposta</h1>
    
    <?php

        $nome = $_GET["nomePessoa"];
        $sobrenome = $_GET["sobrenomePessoa"];

        echo $nome;
        echo "<br>" . $sobrenome;
    
    ?>

</body>
</html>