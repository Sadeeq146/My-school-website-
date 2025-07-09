<!-- dashboard.php -->
<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Registered Students</h2>
  <table border="1">
    <tr><th>Name</th><th>Guardian</th><th>Phone</th><th>Email</th><th>Address</th></tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $row['name'] ?></td>
      <td><?= $row['guardian'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['address'] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>