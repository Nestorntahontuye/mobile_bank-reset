<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Success</title>
</head>
<body>
  <h2>Login Data Received</h2>
  <p>Email: <?php echo $_SESSION['email']; ?></p>
  <p>Password: <?php echo $_SESSION['password']; ?></p>
</body>
</html>
<?php session_destroy(); ?>