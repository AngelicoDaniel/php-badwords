<?php

$p = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quo voluptates voluptatem possimus quae ex praesentium consequuntur, voluptatum modi! Quisquam, beatae consequuntur aliquam aut minima enim culpa quos sapiente aperiam?';

$badWord = $_GET['badWord'];

$censoredP = str_replace( $badWord, '***', $p );

// var_dump($badWord);
// var_dump($censoredP)

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
    <p><?php echo $p ?></p>
    <h4>la lunghezza del paragrafo è di <?php echo strlen($p) ?> caratteri</h4>

    <form action="" method="GET">
        <div>
            <label for="name">Bad Words</label>
            <input type="text" name="badWord">
        </div>
        <button type="submit">INVIO</button>
    </form>

    <h1><?php echo $censoredP ?></h1>
    <h2>la lunghezza del paragrafo è di <?php echo strlen($censoredP) ?> caratteri</h2>
</body>
</html>