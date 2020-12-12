<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
$emp_id=$_SESSION['emp_id'];
$text=$_POST['text'];
//INSERT INTO `employee` (`emp_id`, `emp_name`, `username`, `password`, `dep_id`, `emp_phn`, `emp_address`) VALUES ('ul001', 'emp1', 'emp1', 'emp1', 'dep1', '1234567891', 'bangalore');

$s=" INSERT into message (emp_id,msg,read_n) values('$emp_id','$text','1')";
$query=mysqli_query($con,$s) or die(mysqli_error($con));
/*if($query==1)
{
	$sa="INSERT into salary_details(emp_id,basic,bonus) values('$emp_id','$basic','$bonus')";
	$que=mysqli_query($con,$sa) or die(mysqli_error($con));
	if($que==1)
	{
		$sb="INSERT into deductions(emp_id,tax,pf) values('$emp_id','$tax','$pf')";
		$quey=mysqli_query($con,$sb) or die(mysqli_error($con));*/
		if($query==1)
		{
			echo"Inserted";
			header("refresh:1; url=request_page.html");
		}
	

//header("refresh:1; url=add_emp_page.html");
	else
	{
		echo "Not inserted";
	}


 ?>
 