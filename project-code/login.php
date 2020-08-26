<?php
session_start();

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$uname = $upass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"]) || empty($_POST["username"])) {
    $emailErr = "password is missing";
    header("location:login1.html");
    exit();
  } else {
    $uname = test_input($_POST['username']);
    $upass = test_input($_POST['password']);
    if ($uname == "admin") {
      $_SESSION['name'] = "admin";
      session_write_close();
      echo "Admin";
    } else {

      include_once("db.php");
      if (!$con) {
        echo "Failed to connect";
      } else {
        // echo "<h1>".$uname."</h1>";
        // echo "<h1>".$upass."</h1>";
        $query = "SELECT * FROM users WHERE username='$uname' AND password='$upass'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) != 0) {

          $userData = mysqli_fetch_assoc($result);
          $_SESSION['name'] = $userData['username'];
          session_write_close();
          echo "Login successful";
        } else {
          echo "Login unsuccessful";
        }
      }
    }
  }
}
