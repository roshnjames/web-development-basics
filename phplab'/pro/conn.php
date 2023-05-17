<html><?php
$cnn= mysqli_connect("localhost","aravind","aravind","person");

if(!$cnn){

    echo "connection failed". mysqli_connect_error();
    exit();
}
// else{
//     // echo "connected";
// }

?>
</html>