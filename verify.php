<?php
session_start();
?>
<html>
<body>
<?php $con = mysqli_connect('localhost','root',''); 
 if(!$con)
 { 
 die('Error in Connection'.mysqli_error());
 }
 $sel = mysqli_select_db($con , 'mydb'); 
if(!$sel) 
 { 
 echo " <br> Database not selected"; 
 } 
 $name = $_POST['name'];
$pwd = $_POST['password']; 
$_SESSION["dbname"]=$name;
//echo $name.$pwd;
$qry2 = "select * from login where uname='$name' and pword='$pwd'"; 

$result = mysqli_query($con , $qry2);
$row=mysqli_num_rows($result);
if($row>0){ 
header("Location: button.php");

}
else
echo "<br> user name or password error";

exit();

mysqli_close($con); 
?>
</body>
</html