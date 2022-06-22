<!DOCTYPE html>
<html>
<head>
    <title>If Statements (con't)</title>
</head>
<body>
    
    <?php
        function getMax($num1, $num2, $num3){
            if ($num1 != $num2 && $num1 >= $num3) {
                return $num1;

            }elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            }
            else {
                return $num3;
            }
        }

        echo getMax(3000,900,400);
    ?>

</body>
</html>