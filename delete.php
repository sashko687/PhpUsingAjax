<?php  
//delete.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "testing");
 $query = "DELETE  FROM tbl_employee WHERE id = '".$_POST["employee_id"]."'";
 $result = mysqli_query($connect, $query);
}
?>
