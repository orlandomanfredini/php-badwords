<?php

var_dump($_POST);
$word = $_POST['word'];
$text = $_POST['message'];
$text_len = strlen($_POST['message']);
$word_len = strlen($word);
$new_text = str_replace($word, '***', $text, $count)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>OUTPUT</h1>

    <div>IL TESTO E'</div>
    <div><?php echo $new_text ?></div>
    <div>Il testo è lungo <?php echo $text_len ?> caratteri.</div>
    
    

    <div>LA PAROLA DA SOSTITUIRE E'</div>
    <div><?php echo $word ?></div>
    <div>La parola è lunga <?php echo $word_len ?> caratteri.</div>

    <h2>Tot sostituzioni <?php echo $count ?></h2>
</body>
</html>

