<?php
$server="localhost";
$user="root";
$db="weblab";
$psword="";

 $conn=new mysqli($server,$user,$psword,$db);
 if($conn->connect_error){
 echo "not connected";
 }
 else{
 
 $usr=$_POST["name"];
 $pswd=$_POST["pass"];
 
 $sql="select * from login where username='".$usr."' and password=".$pswd;
 $r=$conn->query($sql);
 echo "jhell";
 $n=$r->num_rows;
 echo $n;
 if($n>0){
 echo "User Registered";
 }
 
 
 
 
 }

 ?>

<!DOCTYPE html>
<html>
<head>
<title>php</title>
</head>
<body>

 <form method="post" action="login.php">
 <input type="text" name="name"><br><br>
 <input type="password" name="pass"><br><br>
 <input type="submit" value="LOGIN">
 </form>
</body>
</html>

