<?php

if (isset($_POST['register'])){ header('Location: signup.php');
  exit;}

if (isset($_POST['email']) && isset($_POST['password'])) {

  $conn = mysqli_connect('localhost', 'root', '', 'learnology');
  
  if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
  }
  

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  $sql = "SELECT * FROM signup WHERE Email = '".$email."' AND Password = '".$password."';";     
  $result = mysqli_query($conn, $sql);
  if ($sql) {
    header('Location: Edu.php');
    exit;
  }
  else {
  
    $error = 'Invalid username or password.';
  }
  

  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>log in</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Log In</h1>
    <form method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" >
      <label for="password">Password</label>
      <input type="password" id="password" name="password" >
      <input type="submit" name="log" value="Start Course">
<br>
      <input type="submit" name="register" value="register">

    </form>
  </div>
</body>
</html>




