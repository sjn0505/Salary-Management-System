<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
$emp_id=$_POST['emp_id'];
//INSERT INTO `employee` (`emp_id`, `emp_name`, `username`, `password`, `dep_id`, `emp_phn`, `emp_address`) VALUES ('ul001', 'emp1', 'emp1', 'emp1', 'dep1', '1234567891', 'bangalore');
$s="DELETE FROM employee WHERE emp_id = '$emp_id'";

if(!mysqli_query($con,$s))
{
  echo 'Not Deleted';
}
//else
//{
  //echo 'Inserted';
//}

header("refresh:1; url=del_emp_page.html");

 ?>
 