<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <?php
        $testo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque ipsum quisquam cupiditate delectus, eius ullam nesciunt hic molestiae fuga totam facere fugiat, distinctio modi ea, pariatur itaque molestias quis.';
        
        ?>
    
    <p>Questo è il testo: <?php echo $testo;?></p>
    <p>Quanti caratteri sono? <?php echo strlen($testo);?></p>

    <form action="index.php" method="get">
        Bad Word: <input type="text" name="badWord"><br>
        <input type="submit">
    </form>
    <p>
        la tua parola da censurare è: <?php echo $_GET["badWord"]; ?>
    </p> 

    
</body>
</html>