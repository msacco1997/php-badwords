<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

    $paragraph_text = 'Gli orsi hanno una grande forza e gli orsi possono correre per cacciare una preda o fare una carica contro gli orsi che hanno sconfinato nel territorio. 
                        La velocità degli orsi dipende anche dal tipo di specie, come gli orsi erbivori, gli orsi onnivori e gli orsi carnivori.';
    
    $paragraph_lenght = strlen( $paragraph_text );

    $badword = $_GET['badword'];

    $paragraph_new_text = str_replace( $badword, '***', $paragraph_text );

    $paragraph_new_lenght = strlen( $paragraph_new_text );




?>











<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>

<h1><?php echo $paragraph_text; ?></h1>

<h2>Questa e' la lunghezza del paragrafo: <?php echo $paragraph_lenght; ?> caratteri.</h2>


<h1><?php echo $paragraph_new_text ?></h1>

<h2>Questa e' la lunghezza del nuovo paragrafo: <?php echo $paragraph_new_lenght; ?> caratteri.</h2>














</body>
</html>