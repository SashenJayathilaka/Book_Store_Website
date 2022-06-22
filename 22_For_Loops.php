<!DOCTYPE html>
<html>
<head>
    <title>For Loops</title>
</head>
<body>

    <?php
   
        for($i = 0; $i < 5; $i++){
            echo $i;
        }

        echo "<br>";

        $luckyNums = [4, 8, 15, 16, 23, 42];
            for ($i=0; $i < count($luckyNums) ; $i++) { 
                echo "$luckyNums[$i] <br>";
            }

    ?>
    
</body>
</html>