<html>
<body>
<?php $con = mysqli_connect('localhost','root','','mydb'); 
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
$qry2 = "INSERT INTO login(uname,pword) VALUES('$name' , '$pwd')"; 
$ins = mysqli_query($con , $qry2); 
//if(!$ins) header("Location: adduser1.php");
//exit(); 


mysqli_close($con); 
?>
</body>
</html>
<html>
<body>
<?php
$con = mysqli_connect('localhost','root','');
$dbname =$_POST['name']; 
 $qry = "CREATE DATABASE $dbname"; 
mysqli_query($con , $qry); 
//echo "<br> Database Created with name $dbname ";
//selecting data base 
$sel = mysqli_select_db($con , $dbname); 

$qry1 = "CREATE TABLE login ( ppl int(2),billdesc varchar(40) NOT NULL , billamount int(20) NOT NULL)"; 
$tab = mysqli_query($con , $qry1); 
header("Location: index.php");
exit(); 

mysqli_close($con); ?>
</body>
</html>