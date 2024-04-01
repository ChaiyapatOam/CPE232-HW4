<?php
$con=mysqli_connect("localhost","root","","my_db");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(empty($_POST['student_id'])){
    echo "Please Input data Student ID";
}

//First query 
$query = "SELECT * FROM tb_persons WHERE student_id = '$_POST[student_id]'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if(!$row){
    echo "Student ID Not Found";
}
 
$student_id =$row['student_id'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$age = $row['age'];

if($_POST['first_name'] !== ""){
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
}
if($_POST['last_name'] !== ""){
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
}
if($_POST['age'] !== ""){
    $age = mysqli_real_escape_string($con, $_POST['age']);
}
// update
$sql="UPDATE tb_persons SET 
    student_id = '$student_id', 
    first_name = '$first_name',
    last_name = '$last_name', 
    age = '$age' 
    WHERE student_id = '$student_id'";

if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }

// Return Result
echo "<h1 align=\"center\">Updated Result</h1>";
echo "<table border='1' align='center' class='table table-hover'>";
echo "<tr>";
echo "<td>"."Student ID"."</td>";
echo "<td>"."First Name"."</td>";
echo "<td>"."Last Name"."</td>";
echo "<td>"."Age"."</td>";
echo "</tr>";

    echo "<tr>";
    echo "<td>".$student_id."</td>";
    echo "<td>".$first_name."</td>";
    echo "<td>".$last_name."</td>";
    echo "<td>".$age."</td>";
    echo "</tr>";

echo "</table>";
mysqli_close($con);
?>
<!-- <form name="inpfrm" method="post" action="UpdateForm.php">
    <p>
        Student ID :$row["student_id"]
    </p>
<table border="0" align="center" class="table table-hover">
    <tr>
        <td width="105" align="right"><input name="reset" type="submit" id="Back" value="Back" /></td>
    </tr>
</table>
</form> -->