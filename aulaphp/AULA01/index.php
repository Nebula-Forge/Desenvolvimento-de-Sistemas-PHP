<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <div>
            <ul>
                <a href="index.php"> PAGINAL INICIAL </a>
                <a href="calendario.html"> CALENDÁRIO </a>
                <a href="contato.html"> CONTATO </a>
            </ul>
        </div>
    </nav>

    <h1>AULA DE PHP 01 - RELEMBRANDO HTML</h1>

    <p>EXEMPLO PARAGRÁFO 1</p>

    <p>EXEMPLO PARAGRÁFO 2</p>

    <?php
    echo "<h2> Olá Mundo! </h2>"; //vai ser mais utilizado
    print "<h3> Também Funciona </h3>";

    $numero = 4;
    $numero2 = 10;

    echo "<h3> numero : " . $numero . " , numero 2 : " . $numero2 . ", e a soma é : " . $numero + $numero2 . "<h3>"
    ?>

</body>

</html>