<html>
<head>
	<title>Update Details</title>
	<style>
		body{
			background-color:#000000;
	
          
}
		   
		input{
			width:40%;
			height:5%;
			border:1px;
			border-radius:05px;
			padding:8px 15px 8px 15px;
			margin:10px 0px 10px 0px;
			box-shadow:1px 1px 2px 1px grey;
		}   
	</style>
</head>
<body>
	<center>
		<h1>Update Details</h1>
		<form action="" method="POST">

		<!--<input type="text" id="id" name="emp_id" placeholder="Enter emp_id" required><br>-->
		<input type="text" id="id" name="emp_name" placeholder="Enter emp_name" required><br>
		<input type="text" id="id" name="emp_phn" placeholder="Enter emp_phn" required><br>
		<input type="text" id="id" name="emp_address" placeholder="Enter emp_address" required><br>
		<input type="text" id="id" name="username" placeholder="username" required><br>
		<input type="text" id="id" name="password" placeholder="Enter password" required><br>
		<input type="text" id="id" name="dep_id" placeholder="Enter dep_id" required><br>
		<input type="text" id="id" name="designation" placeholder="designation" required><br>
        <input type="text" id="id" name="basic" placeholder="Enter basic" required><br>
        <input type="text" id="id" name="bonus" placeholder="Enter bonus" required><br>
        <input type="text" id="id" name="tax" placeholder="Enter tax" required><br>
        <input type="text" id="id" name="pf" placeholder="Enter pf" required><br>

        <input type="submit" name="update" value="UPDATE DATA">

    </form>
    </center>
</body>
</html>

<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
$emp_id=$_GET['emp_id'];
//$emp_id=$_SESSION['emp_id'];
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

if(isset($_POST['update']))
{
	$s="UPDATE  employee SET emp_name='$emp_name',username='$username',password='$password',emp_phn=$emp_phn,emp_address='$emp_address',dep_id='$dep_id',designation='$designation' where emp_id='$emp_id'";
$query=mysqli_query($con,$s) or die(mysqli_error($con));
if($query==1)
{
	$sa="UPDATE salary_details SET basic=$basic,bonus=$bonus WHERE emp_id='$emp_id'";
	$que=mysqli_query($con,$sa) or die(mysqli_error($con));
	if($que==1)
	{
		$sb="UPDATE deductions SET tax=$tax,pf=$pf where emp_id='$emp_id'";
		$quey=mysqli_query($con,$sb) or die(mysqli_error($con));
		if($quey==1)
		{
		  echo"updated";
		}
	}
}


//header("refresh:1; url=add_emp_page.html");
	else
	{
		

		 echo "Not updated";
		
	}

}
 
 ?>
 
