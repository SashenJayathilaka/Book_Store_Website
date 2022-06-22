<!DOCTYPE html>
<html lang="en">
<head>
    <title>Switch Statements</title>
</head>
<body>

    <form action="20_Switch_Statements.php" method="POST">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];

        switch ($grade) {
            case 'A':
                echo "You did amazing!";
                break;
            case 'B':
                echo "You did pretty good";
                break;
            case 'C':
                echo "You did poorly";
                break;
            case 'D':
                echo "You did very bad";
                break;
            case 'F':
                echo "You faill!";
                break;
            default:
                echo "Invaild Grade";
        }
    ?>


</body>
</html>