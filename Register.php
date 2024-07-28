<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .reg {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
      width: 300px;
    }
    
    .reg h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .reg input[type="text"],
    .reg input[type="password"]
     {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
     .reg input[type="number"]{
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
     .reg input[type="email"]
    {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .reg input[type="submit"] {
      width: 100%;
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .reg input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    .reg p {
      text-align: center;
      margin: 0;
    }
    
    .reg p a {
      color: #4caf50;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="reg">
      <h2>Register</h2>
      <form action="adduser.php" method="post">
        <input type="text" placeholder="Name" name="name" maxlength="10" required>
        <input type="password" placeholder="Password" name="password" required><br>
        <input type="password" placeholder="Confirm Password" name="password" required><br>
        <input type="number" placeholder="phone number" maxlength="10"><br>
        <input type="email" id="email" name="email" placeholder="email"><br>
         Gender: <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br><br> 
        D.O.B&nbsp<input type="date"><br><br>
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</body>
</html>
