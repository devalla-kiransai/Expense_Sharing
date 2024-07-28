<?php
session_start();
?>
<html>
<body>
 <?php
$con = mysqli_connect('localhost','root','');
$dname =$_SESSION["dbname"];
 if(!$con) 
{ 
 die('Error in Connection'.mysqli_error());
 } 
 $sel = mysqli_select_db($con , $dname); 
if(!$sel) 
 echo " <br> Database not selected";  
$res = mysqli_query($con ,"SELECT * From login"); 
echo "<center>"; 
echo "<table>"; 
echo "<caption> Bill Details </caption>"; 
echo "<tr><th> BILL DESC </th><th> BILL AMOUNT </th></tr> "; 
while($row = mysqli_fetch_array($res)) 
{ 
echo "<tr><td> "; 
echo $row['billdesc']; 
echo "</td>"; 
echo " <td> ";
echo $row['billamount']; 
echo "</td></tr>"; 
} 
 echo "</table>"; 
 echo "</ceneter>"; 
echo"<br><a href='button.php'>Move to Home Page </a>"; 
mysqli_close($con); ?>
</body>
</html>
