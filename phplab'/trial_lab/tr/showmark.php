<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1>
       <tr>
        <th>Name </th>
        <th>Rollno </th>
        <th>Subject </th>
        <th>Mark </th>
        <th>Total Mark </th></tr>
        <?php
        include "connect.php";
        $q="SELECT *,(SELECT name FROM student WHERE student.rollno=marklist.rollno)as name FROM `marklist` ORDER BY `name` ASC";
        $q1="SELECT max(mark) m,rollno FROM `marklist`;";
        $columndata=mysqli_query($conn,$q);
        $op='';
        foreach($columndata as $r)
        {
            $op.="<tr>";
            $op.="<td>".$r['name']."</td>";
            $op.="<td>".$r['rollno']."</td>";
            $op.="<td>".$r['subject']."</td>";
            $op.="<td>".$r['mark']."</td>";
            $op.="<td>".$r['total_mark']."</td></tr>";
        }
        echo $op;
        $maxdata=mysqli_query($conn,$q1);
        foreach($maxdata as $r)
        {
            // $op.="<tr><td> Rollno:".$m['rollno']."Mark: ".$m['m']."</td></tr>";
            echo " Rollno:".$r['rollno']."Mark: ".$r['m'];
        }
       
        ?>
        
    </table>
</body>
</html>