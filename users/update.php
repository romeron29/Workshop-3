<?php
include('../utils/connection.php');
$conn = getConnection();
$id = $_GET['id'];

$sql = "select * from user where id_user = '$id';";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
</head>
<body>
    <div>
        <form action="edit.php" method="POST">
            <label for="id">ID</label>
            <input id="id" class="form-control" type="text" name="id" value = "<?= $row['id_user']?>">
            <label for="first-name">First Name</label>
            <input id="first-name" class="form-control" type="text" name="firstName" value = "<?= $row['firstname']?>">
            <label for="last-name">Last Name</label>
            <input id="last-name" class="form-control" type="text" name="lastName" value = "<?= $row['lastname']?>">
            <label for="email">Email Address</label>
            <input id="email" class="form-control" type="text" name="email" value = "<?= $row['email']?>">
            <label for="province">Provincia</label>
            <select id="province" class="form-control" name="province" value = "<?= $row['email']?>">

            </select>
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password">
            <label for="role">Role</label>
            <select id="role" class="form-control" name="role">

            <button type="submit" class="btn btn-primary"> Sign up </button>
        </form>

    </div>
</body>
</html>
