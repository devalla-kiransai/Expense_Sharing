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
$billdesc = $_POST['desc'];
$billamount=$_POST['amount'];
$ppl=$_POST['ppl'];
$qry="insert into login values($ppl,'$billdesc',$billamount)";
mysqli_query($con ,$qry); 
header("Location: main.php");
exit(); 
 mysqli_close($con); ?>
</body>
</html>