<!DOCTYPE html>
<html>
<head>
    <title>Using Checkboxes</title>
</head>
<body>
    
    <form action="13_Using_Checkboxes.php" method="POST">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Orange: <input type="checkbox" name="fruits[]" value="orange"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>

</body>
</html>