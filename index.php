<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $input = 'E che cazzo';

        $censored = $_GET['censored'];

        $censoredInput = str_replace($censored, '***', $input);

    ?>


    <div>
        <?= $input; ?>
    </div>
    

    <div>
        Lunghezza paragrafo: <?= strlen($input); ?>
    </div>

    <div>
        <?= $censoredInput; ?>
    </div>

    <div>
        Lunghezza paragrafo censurato: <?= strlen($censoredInput) ?> 
    </div>


</body>
</html>