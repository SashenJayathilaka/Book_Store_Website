<!DOCTYPE html>
<html lang="en">
<head>
    <title>Associative Arrays</title>
</head>
<body>
    
    <form action="14_Associative_Arrays.php" method="POST">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
        $grades = array("JIM"=>"A+", "PAM"=>"B-", "OSCAR"=>"C+");
        echo $grades[$_POST["student"]];
        
        //$grades["JIM"] = "D";
        //echo $grades["JIM"];
    ?>
</body>
</html>