<?php
    require "conn.php";
    
    if(isset($_POST["submit"]))
    {
        $rollno = $_POST["roll"];
        $name = $_POST["n"];
        $mark = $_POST["m"];
        $res = $_POST["r"];

        $q = "insert into student values ('$rollno','$name','$mark','$res')";

        $output = mysqli_query($con,$q);

        if($output)
        {
            echo "sucess";
        }
        else
        {
            echo "eroor";
        }
    }

?>

<html>
    <body>
        <form method="post">

        roll : <input type="number" name="roll"><br>
        name : <input type="text" name="n"><br>
        mark : <input type="number" name="m"><br>
        result : <input type="text" name="r"><br>

        <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>