<?php
$con=mysqli_connect("localhost","root","","my_db");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(empty($_POST['student_id'])){
    echo "Please Input data Student ID";
}elseif(empty($_POST['first_name'])){
    echo "Please Input data First Name";
}elseif(empty($_POST['last_name'])){
    echo "Please Input data Last Name";
}elseif(empty($_POST['age'])){
    echo "Please Input data Age";
}else{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $age = mysqli_real_escape_string($con, $_POST['age']);

    $sql="INSERT INTO tb_persons (student_id, first_name, last_name, age)
    VALUES ('$student_id', '$first_name', '$last_name', '$age')";
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
    echo "Success" ;
}

mysqli_close($con);
?>
<form name="inpfrm" method="post" action="Form.php">
<table border="0" align="center" class="table table-hover">
    <tr>
        <td width="105" align="right"><input name="reset" type="submit" id="Back" value="Back" /></td>
    </tr>
</table>
</form>