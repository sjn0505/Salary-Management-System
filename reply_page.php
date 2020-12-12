
<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');

$emp_id = $_SESSION['emp_id'];
$leaves=$_POST['leaves'];
$text=$_POST['text'];
/*$emp_phn=$_POST['emp_phn'];
$username=$_POST['username'];
$password=$_POST['password'];
$dep_id=$_POST['dep_id'];
$designation=$_POST['designation'];
$basic=$_POST['basic'];
$bonus=$_POST['bonus'];
$tax=$_POST['tax'];
$pf=$_POST['pf'];*/
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
$sb="SELECT * from deductions where emp_id='$emp_id'";
$qs=mysqli_query($con,$sb);
while($row=mysqli_fetch_array($qs))
{
	
	$emp_id=$row['emp_id'];
    $tax=$row['tax'];
    $pf=$row['pf'];
	$leaves1=$row['leaves'];
}
//echo "$leaves";
//echo "$leaves1";
$lev=$leaves1+$leaves;
//echo "$lev";

$s=" INSERT into adminmsg (emp_id,message,read_a) values('$emp_id','$text','1')";
$query=mysqli_query($con,$s) or die(mysqli_error($con));
if($query==1)
{
	   $sb="UPDATE deductions SET leaves=$lev where emp_id = '$emp_id'";
		$quey=mysqli_query($con,$sb) or die(mysqli_error($con));
		
		
			echo"Inserted";
			header("refresh:1; url=reply_page.html");
		
}

//header("refresh:1; url=add_emp_page.html");
	else
	{
		echo "Not inserted";
	}


 ?>
 