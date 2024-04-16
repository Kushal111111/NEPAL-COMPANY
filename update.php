<?php
include 'connect.php';
if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM wedp WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "UPDATE wedp SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>
<html>
<head>
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="botton.css">
</head>
<h1 align="middle">UPDATE YOUR DATA</h1>
<br>
<br>
<br>
<body>
<form method="post" align="middle">
    <div>
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>">
    </div>
    <br>
    <div>
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>">
    </div>
    <br>
    <div>
        <label>Mobile</label>
        <input type="text" class="form-control" name="mobile" value="<?php echo isset($row['mobile']) ? $row['mobile'] : ''; ?>">
    </div>
    <br>
    <div>
        <label>Password</label>
        <input type="text" class="form-control" name="password" value="<?php echo isset($row['password']) ? $row['password'] : ''; ?>">
    </div>
    <br>
    <button type="submit" name="submit" class="btn-primary">UPDATE</button>
</form>
</body>
</html>