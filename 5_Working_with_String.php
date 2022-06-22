<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working_with_String</title>
</head>
<body>
    
    <?php
    $phrase = "Magic is believing";

    echo strtolower($phrase);

    echo "<br>";

    echo strtoupper($phrase);

    echo "<br>";

    echo strlen($phrase);

    echo "<br>";

    //$phrase[0] = "B";
    echo $phrase[0];

    echo "<br>";

    echo str_replace("Magic" , "Family", $phrase);

    echo "<br>";

    echo substr($phrase, 8, 3);
    ?>

</body>
</html>