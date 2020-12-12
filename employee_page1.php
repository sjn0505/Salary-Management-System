<!DOCTYPE html>
<html>
<head>
<title>Employee page</title>
<link rel="stylesheet" type="text/css" href="admin_page1.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> 
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
 </head>
<body>
	
	<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
$emp_id = $_SESSION['emp_id'];
$s="SELECT * FROM adminmsg where read_a=1 AND emp_id='$emp_id'" ;
$query_run=mysqli_query($con,$s);
 $count=mysqli_num_rows($query_run);
 ?>
	

	<div class="header">
<h1 >WELCOME</h1>
<nav id="loginid">
		<div class="contains" align="left">
			
				<a href="adminmsg.php">Notification(<?php  echo $count; ?>)</a>
			
		</div>
</nav>

<nav id="loginid">
		<div class="contains" align="right">
			
				<a href="login1.php">Logout</a>
		</div>
</nav>
</div><br><br>

<!--<a href="add_emp_page.html">Add Employee</a>
</div>


<div class="button">
<center>
<a href="del_emp_page.html">Remove Employee</a>
</center>
</div>
<div class="button">
<a href="view_emp_det_page.html">Employee Details</a>
</div>
<div class="button">
<a href="view_emp_sal_page.html">Employee Salary Details</a>-->
<div class="button" align="center">
<a href="view_my_sal_det.php">View my Salary Details</a>
</div>
<br>

<div class="button" align="center">
<a href="view_my_det_page.php">View my Personal Details</a>
</div>
<br>

<div class="button" align="center">
<a href="request_page.html">leave request</a>
</div>
<br>




</body>
</html>