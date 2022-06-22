<!DOCTYPE html>
<html>
<head>
    <title>Inheritance</title>
</head>
<body>
    
    <?php

        class Chef{
            function makeChicken(){
                 echo "The chef makes chicken";
            }
            function makeSalad(){
                 echo "The chef makes salad";
            }
            function makeSpecialDish(){
                 echo "The chef makes bbq ribs";
            }
       };

       class Srilankanchef extends Chef {
            function makePasta(){
                echo "The chef makes pasta";
            }
            function makeSpecialDish(){
                echo "The chef makes chicken parm";
            }
       };

        $chef = new Chef();
        $chef->makeSpecialDish();
        echo "<br>";
        $srilankanChef = new Srilankanchef ();
        $srilankanChef->makeSpecialDish();

    ?>

</body>
</html>