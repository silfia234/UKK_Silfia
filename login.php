<?php
  include "koneksi.php"; 
  if(isset($_GET['wrong'])){
    echo "<script>alert('Username dan Password tidak ditemukan')</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <form action="proses_login.php" method="post">
  <div class="title">Login</div>
  <div class="body">
    <div class="uname">
      <div class="from-group"></div>
      <label for="username">Username</label>
      <input type="text" name="uname" id="username"><br/>
    </div>
    <div class="upass">
      <div class="from-group"></div>
      <label for="userpass">Password</label>
      <input type="password" name="upass" id="userpass">
    </div>
  </div>
  <div class="footer">
    <input type="submit" value="Login" name="login" class="login">
  </div>
  </form>
</body>
</html>