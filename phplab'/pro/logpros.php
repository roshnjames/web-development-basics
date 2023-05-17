<?php
include "conn.php";
session_start();
if(isset($_POST["submit"])){

    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
    $q="select * from student where username='$uname';";
    $res=mysqli_query($cnn,$q);
    foreach($res as $r){

        if($r["username"]=$uname && $r["pass"]=$pass){

            $_SESSION["x"]=$uname;
            header("location:prof.php");
        }


    }
}

?>