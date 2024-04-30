<?php
if (isset($_POST['login'])) {
  $conn=new mysqli('localhost','root','','kadi');
  $em=$_POST['email'];
  $pass=$_POST['password'];
  $sql=mysqli_query($conn,"SELECT * FROM users WHERE email='$em' AND password='$pass'");
  session_start();
  if (mysqli_num_rows($sql)==0) {
    echo "incorrect password or email";
  }
  else
  {
    $_SESSION['password']=$pass;
    header("location:home.php");
  }
}


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
  <form class="login-form" method="POST" action="#">
    <h2>Login</h2>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="example@example.com" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" name="login">Login</button>
    <p>Already Have An Account<a href="registration.php">Register</a></p>
  </form>
</div>
</body>
</html>