<?php
session_start();
?>
<html>
<style>
.container{
display:flex;
flex-wrap:wrap;
}
input{
background-color: #4CAF50;
            color: white;
     
            width:100px;
           font-size:20px;
            margin-top:50px;
            height:30px;
            margin-left:20px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 10px;
}
</style>
<body>
<?php 
$con = mysqli_connect('localhost', 'root', '');
$dname = $_SESSION["dbname"];
if (!$con) { 
    die('Error in Connection: ' . mysqli_error());
} 
$sel = mysqli_select_db($con, $dname); 
if (!$sel) {
    echo " <br> Database not selected";  
} 

$ppl_query = "SELECT SUM(ppl) / COUNT(ppl) AS avg_ppl FROM login";
$result_ppl = mysqli_query($con, $ppl_query);
$row_ppl = mysqli_fetch_assoc($result_ppl);
$avg_ppl = (double) $row_ppl['avg_ppl'];
$amount_query = "SELECT SUM(billamount) AS total_amount FROM login";

$result_amount = mysqli_query($con, $amount_query);

$row_amount = mysqli_fetch_assoc($result_amount);
$total_amount = (double) $row_amount['total_amount'];

$amount_per_head = $total_amount / $avg_ppl;
echo "<br> TOTAL AMOUNT PER HEAD IS Rs. " . $amount_per_head;

mysqli_close($con);
?>
<div class="container">
<form method="post" action="button.php">
<input type="submit" value="home"></form>
</div>
</body>
</html>
