<?php
$paragrafo = "Prova di testo, inizio lezioni php in data 21/06/2021. Oggi ha Palermo ci sono 36 gradi all'ombra porcaputtana, e io sono morto di caldo. Mi tocca in ogni caso lavorare al computer, ed svolgere l'esercizio lasciato per il pomeriggio!";
$paragrafo_modificato = str_replace($parola, $censura, $paragrafo);
//strlen($paragrafo);
$parola = $_GET['parola'];
$censura = '***';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Un pomeriggio a Palermo</h1>
    <p>
    <?php
     echo $paragrafo_modificato;
     var_dump($_GET);

     ?></p>
</body>
</html>