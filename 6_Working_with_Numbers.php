<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Numbers</title>
</head>
<body>

<?php

use function PHPSTORM_META\map;

echo 5.9 * 9;

echo "<br>";

echo 10 % 3;

echo "<br>";

echo (4 + 5) * 10;

echo "<br>";

$num = 10;
//$num--;
//$num = $num + 25;

$num += 25;
echo $num;

echo "<br>";

echo abs(-100);

echo "<br>";

echo pow(2 , 4);

echo "<br>";

echo sqrt(144);

echo "<br>";

echo max(2 ,10);    // min 

echo "<br>";

echo round(3.2);

echo "<br>";

echo ceil(3.3);

echo "<br>";

echo floor(3.9);
?>
    
</body>
</html>