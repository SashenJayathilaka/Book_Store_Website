<!DOCTYPE html>
<html lang="en">
<head>
    <title>Building a mad libs game</title>
</head>
<body>

    <form action="9_Building_a_mad_libs_game.php" method="get">
        Color: <input type="text" name="Color"> <br>
        Plural Noun: <input type="text" name="PluralNoun"> <br>
        Celebrity: <input type="text" name="Celebrity"> <br>
        <input type="submit">
    </form>

    <?php
        $color = $_GET["color"];
        $PluralNoun = $_GET["PluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Rose are $color <br>";
        echo "$PluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>
    
</body>
</html>