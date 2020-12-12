<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$emp_address=$_POST['emp_address'];
$emp_phn=$_POST['emp_phn'];
$username=$_POST['username'];
$password=$_POST['password'];
$dep_id=$_POST['dep_id'];
$designation=$_POST['designation'];
$basic=$_POST['basic'];
$bonus=$_POST['bonus'];
$tax=$_POST['tax'];
$pf=$_POST['pf'];
//INSERT INTO `employee` (`emp_id`, `emp_name`, `username`, `password`, `dep_id`, `emp_phn`, `emp_address`) VALUES ('ul001', 'emp1', 'emp1', 'emp1', 'dep1', '1234567891', 'bangalore');
/*$s=" INSERT into employee (emp_id,emp_name,username,password,emp_phn,emp_address,dep_id,designation) values('$emp_id','$emp_name','$username','$password',$emp_phn,'$emp_address','$dep_id','$designation')";
$s="INSERT into salary_details(emp_id,basic,bonus) values('$emp_id','$basic','$bonus')";
$s="INSERT into deductions(emp_id,tax,pf) values('$emp_id','$tax','$pf')";

if(!mysqli_query($con,$s))
{
  echo 'Not Inserted';
}
//else
//{
  //echo 'Inserted';
//}*/

$s=" INSERT into employee (emp_id,emp_name,username,password,emp_phn,emp_address,dep_id,designation) values('$emp_id','$emp_name','$username','$password',$emp_phn,'$emp_address','$dep_id','$designation')";
$query=mysqli_query($con,$s) or die(mysqli_error($con));
if($query==1)
{
	$sa="INSERT into salary_details(emp_id,basic,bonus) values('$emp_id','$basic','$bonus')";
	$que=mysqli_query($con,$sa) or die(mysqli_error($con));
	if($que==1)
	{
		$sb="INSERT into deductions(emp_id,tax,pf) values('$emp_id','$tax','$pf')";
		$quey=mysqli_query($con,$sb) or die(mysqli_error($con));
		if($quey==1)
		{
			echo"Inserted";
			header("refresh:1; url=add_emp_page.html");
		}
	}
}
//header("refresh:1; url=add_emp_page.html");
	else
	{
		echo "Not inserted";
	}


 ?>
 