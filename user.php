<?php
 include 'connect.php';
 if(isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$sql="insert into wedp (name,email,mobile,password) 
values('$name','$email','$mobile','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "Data Inserted ---MISSION PASS";
    header('location:display.php');
}else{
    die(mysqli_error($conn));
}
 }
 ?>
 <marquee style="font-family: Book Antiqua; color: #FFFFFF" bgcolor="red" direction="down" height="80" behavior="alternate" > 
  <div class="1" align="center"> 
    <h2>NEPAL COMPANY</h2>
  </div> 
  <div class="2" align="center"> 
      OTHER ARE BETTER BUT WE ARE BEST
  </div> 
</marquee> 
<br>
<br>
<h1 align="middle">LOGIN</h1>
<br>
<br>
<html>
<title></title>
<head>
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
<form method="post" align="middle">
<div>
<label>Name</label>
<input type="text" class="form-control"
placeholder="Enter your name" name="name">
</div>
<br>
<div>
<label>Email</label>
<input type="text" class="form-control"
placeholder="Enter your email" name="email">
</div>
<br>
<div>
<label>Mobile</label>
<input type="number" class="form-control"
placeholder="Enter your mobile" name="mobile">
</div>
<br>
<div>
<label>Password</label>
<input type="text" class="form-control"
placeholder="Enter your password" name="password">
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</html>