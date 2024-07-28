<html>
<style>
.container{
display:flex;
flex-wrap:wrap;
}
input{
background-color: #4CAF50;
            color: white;
     
            width:500px;
           font-size:100px;
            margin-top:90px;
            height:200px;
            margin-left:200px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 10px;
}
.con{
padding-left:350px;
}

</style>
<div class='container'>
<form method='post' action='main.php'>
<input type='submit' value="Add"></form>
<form method='post' action='view.php'>
<input type='submit' value="View"></form>
<dic class="con">
<form method='post' action='divide.php'>
<input type='submit' value="Divide"></form>
</div></div>
</html>