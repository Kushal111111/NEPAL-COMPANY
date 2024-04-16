<?php
include 'connect.php'; 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Nepal Company Members</title>  <link rel="stylesheet" href="design.css">
  <link rel="stylesheet" href="botton.css">
</head>
<body>
  <marquee style="font-family: Book Antiqua; color: #FFFFFF" bgcolor="red" direction="down" height="80" behavior="alternate">
    <div class="1" align="center">
      <h2>NEPAL COMPANY</h2>
    </div>
    <div class="2" align="center">
      OTHER ARE BETTER BUT WE ARE THE BEST  </div>
  </marquee>

  <br>
  <br>
  <h1 align="center">MEMBERS</h1>
  <br>
  <div class="container">
    <button class="btn-primary"><a href="user.php" class="text-light">Add User</a></button>
    <table class="table table-striped table-bordered">  <thead>
        <tr>
          <th scope="col">SN</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM wedp";  
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            echo '<tr>
              <th scope="row">' . $id . '</th>
              <td>' . $name . '</td>
              <td>' . $email . '</td>
              <td>' . $mobile . '</td>
              <td>
                <button class="btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                <button class="btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
              </td>
            </tr>';
          }
        } else {
          echo "Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);  
        ?>
      </tbody>
    </table>
  </div>
  <p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">Developed By: Ashish Belbase & Anmol Acharya</p>
</body>
</html>
