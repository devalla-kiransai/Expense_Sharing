

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
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
    
    .login-box {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
      width: 300px;
    }
    
    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .login-box input[type="submit"] {
      width: 100%;
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .login-box input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    .login-box p {
      text-align: center;
      margin: 0;
    }
    
    .login-box p a {
      color: #4caf50;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="verify.php" method="post">
        <input type="text" placeholder="Username" name="name" maxlength="10" required>
        <input type="password" placeholder="Password" name="password" required>
        <input type="submit" value="Login">
        <p>Don't have an account? <a href="Register.php">Register</a></p>
      </form>
    </div>
  </div>
</body>
</html>
