<?php
$con=mysqli_connect("localhost","root","","my_db");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<form name="inpfrm" method="post" action="Delete.php">
<table width="500" height="10" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
        <td height="30" align="right"></td>
        <td width="105" align="left"> DELETE </td>
    </tr>
    <tr>
        <td height="30" align="right">Student ID : </td>
        <td width="105" align="left"><input name="student_id" type="text" id="student_id" size="30" value="" maxlenght="30"> </td>
    </tr>
    <tr>
        <td height="30" align="right"></td>
        <td width="105" align="right"><input name="DELETE" type="submit" id="DELETE" value="DELETE" /></td>
    </tr>
</table>
</form>