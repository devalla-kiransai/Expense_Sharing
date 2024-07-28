<!DOCTYPE html>
<html>
<head>
    <title>Expense Sharing App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        #expenseForm {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        #expenseForm input[type="text"], #expenseForm input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        #expenseForm input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 10px;
        }
        }
       
    </style>
</head>
<body>

    <h1>Expense Sharing App</h1>
    <div id="expenseForm">
        <h2>Add Expense</h2>
        <form method="post" action= "add.php">
        <input type="number" placeholder="number of people to share" name="ppl">
<h3> notice: keep the no of persons constant</h3>
        <input type="text" placeholder="Description of bill" name="desc">
        <input type="number" placeholder="Bill amount" name="amount">
        <input type="submit" value="ok"></form>
<form method="post" action="button.php">
<input type="submit" value="back"></form>
	
    
</body>
</html>
