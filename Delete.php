<?php
$con=mysqli_connect("localhost","root","","my_db");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(empty($_POST['student_id'])){
    echo "Please Input data Student ID";
}

$student_id = $_POST['student_id'];
$query = "DELETE FROM tb_persons WHERE student_id = '$student_id'" or die("Error:" . mysqli_error($con));
$result = mysqli_query($con, $query);
echo "<h1>Deleted</h1>";

mysqli_close($con);
?>
