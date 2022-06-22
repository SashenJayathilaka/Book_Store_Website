<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST vs GET</title>
</head>
<body>

    <form action="11_POST_vs_GET.php" method="POST">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>

    <?php
        echo $_POST["password"];
    ?>

</body>
</html>