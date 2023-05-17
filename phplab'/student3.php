<?php
 session_start();
   $mark = $_SESSION["mark"];
   $res = $_SESSION["res"];

    
?>


<html>
<body>

<h2>Student result </h2>

<table>
  <tr>
    <th>Mark</th>
    <th>Result</th>
    </tr>
  <tr>
    
    <td> <p> <?php echo $_SESSION["mark"]; ?></p>  </td>
	<td> <p> <?php echo $_SESSION["res"]; ?></p> </td>
  </tr>


</table>

</body>
</html>
