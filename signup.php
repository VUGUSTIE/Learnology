
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Register</h1>
    <form method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" name="submit" id="" value="Sign Up">
    </form>
  </div>
</body>
</html>







<?php


if (isset($_POST['submit'])){
  $Conn_wampdb = mysqli_connect("localhost" , "root" , "" , "learnology");
  if(!$Conn_wampdb){ echo "connection error"; }
    else {$Email = $_POST['email'];
        $username = $_POST ['username'];
        $Password = $_POST ['password'];
        $ADD = "INSERT INTO signup VALUES ( '.$username.' , '.$Email.' , '.$Password.' )";
        $Query = mysqli_query($Conn_wampdb ,$ADD);
        header('Location: login.php');
        exit;
  }
}



?>
