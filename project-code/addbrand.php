<?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname="grocery1"; 

// $con = mysqli_connect($servername,$username,$password,$dbname);

include_once("db.php");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Database Connection Error";
}
$brand_name=mysqli_real_escape_string($con,$_POST['title']);
$brand_description=mysqli_real_escape_string($con,$_POST['description']);
$check_brand="SELECT * from brands where brand_name='$brand_name'";
$result=mysqli_query($con,$check_brand);
if(mysqli_num_rows($result)>0)
{
echo "<span class='text-danger'>brand already exists</span>";
}
else
{
$query="INSERT INTO brands(brand_title,brand_description) values('$brand_name','$brand_description')";
$results=mysqli_query($con,$query);
header("location:adminfinal.php");
}

?>