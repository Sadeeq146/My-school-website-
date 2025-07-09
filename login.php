<!-- login.php -->
<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if ($user == "student123" && $pass == "password") {
  echo "Login successful!";
} else {
  echo "Invalid login!";
}
?>