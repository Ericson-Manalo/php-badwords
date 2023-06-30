<?php

$sentence = $_GET['paragraph'];
$badWord = $_GET['badWord'];

//determino con funzione strlen lunghezza del primo paragrafo
$textLength = strlen($sentence);

//sostituisco il badWord con *** presente nel paragrafo inserito
$wordCensored = str_replace($badWord, '***', $sentence);

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
            <strong>
                Sentence inserted:
            </strong>
            <em>
                <?php echo $sentence ?> 
            </em>
        </p>

        <p>
            <strong>Length of the sentence:</strong>
            <em>
                <?php echo $textLength ?>
            </em>
        </p>

        <p>
            The bad word that has to be censored is: 
            <strong>
                <?php echo $badWord ?>
            </strong>
        </p>
        <p>
            <strong>
                The paragraph with the words/letters censored:
            </strong>
            <?php echo $wordCensored ?> 
        </p>
        <p>
            New length: <?php echo $newLength?>
        </p>
    </div>
    
</body>
</html>