<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building_a_basic_calculator</title>
</head>
<body>
    
    <form action="8_Building_a_basic_calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>

    Answer: <?php  echo $_GET["num1"] + $_GET["num2"]  ?>

</body>
</html>