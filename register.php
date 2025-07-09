<!-- register.php -->
<?php
include 'db.php';
$name = $_POST['name'];
$guardian = $_POST['guardian'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
mysqli_query($conn, "INSERT INTO students (name, guardian, phone, email, address)
VALUES ('$name', '$guardian', '$phone', '$email', '$address')");
echo "Registration successful!";
?>