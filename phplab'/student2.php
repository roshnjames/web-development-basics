<?php
 session_start();
    require "conn.php";
    if(isset($_POST["submit"]))
    {
        $rollno = $_POST["roll"];
        $name = $_POST["name"];
        
        $q ="select * from student where roll='$rollno'";

        $res = mysqli_query($con,$q);

        
        foreach ($res as $r)
        {
            $_SESSION["mark"] = $r["mark"];
            $_SESSION["res"] = $r["result"];
            header("location: student3.php");
        }
    }
?>

<html>
    <body>
        <form method="post">
            rollno : <input type="number" name="roll"><br>
            name   : <input type="text" name="name"><br>
            <input type="submit" name="submit">

        </form>
    </body>
</html>