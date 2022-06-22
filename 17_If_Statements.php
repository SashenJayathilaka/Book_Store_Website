<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>

    <?php

        $isMale = true;
        $isTall = false;

        if ($isMale && $isTall) {       // ||
            echo "You are a tall Male";
        }elseif ($isMale && !$isTall) {
            echo "You are a short Male";
        }elseif (!$isMale && !$isTall) {
            echo "You are a not Male but are tall";
        }else {
            echo "You are not Male and not tall";
        }

    ?>

</body>
</html>