<body>
    <form action="markentry.php" method="POST">
       
       Student:<br>
       <select name="rollno">
            <?php
            include "connect.php";
            $q="select * from student ORDER BY `student`.`rollno` ASC";
            $res=mysqli_query($conn,$q);
            $op='';
            foreach($res as $r){
                $op.="<option values='".$r['rollno']."'>".$r['rollno']." - ".$r['name']." </option>";
            }
            echo $op;
            ?>
         </select><br>
        Subject:<br>
         <input type="text" name="subject" required><br>
         Mark:<br>
         <input type="number" name="mark" required><br>
         Total Mark:<br>
         <input type="number" name="totmark" required><br>
          <input type="submit" name="submit"/><br>
    <!-- <a href="register.php">Register Student</a> -->
    </form>

</body>