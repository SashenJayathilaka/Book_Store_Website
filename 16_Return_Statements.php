<!DOCTYPE html>
<html lang="en">
<head>
    <title>Return Statements</title>
</head>
<body>
    
    <?php
        function cube($num){
            echo "Hello <br>";
            return $num * $num * $num;
            echo "World";
        }

        echo cube(5);
        //$cubeResult = cube(4);
        //echo $cubeResult;
    ?>

</body>
</html>