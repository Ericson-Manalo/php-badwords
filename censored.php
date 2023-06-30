<?php

$sentence = $_GET['paragraph'];
$badWord = $_GET['badWord'];

//determino con funzione strlen lunghezza del primo paragrafo
$textLength = strlen($sentence);

//sostituisco il badWord con *** presente nel paragrafo inserito
$wordCensored = str_replace($badWord, '****', $sentence);

//determino nuovamente la lunghezza del nuovo paragrafo 
$newLength = strlen($wordCensored);

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
    <div>
        <p>
            <?php echo $sentence ?> <?php echo $textLength ?>
        </p>
        <p>
            <?php echo $wordCensored ?> <?php echo $newLength?>
        </p>
    </div>
    
</body>
</html>