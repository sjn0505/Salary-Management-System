

<!DOCTYPE html>
<html>
<head>
<title>Admin page</title>
<link rel="stylesheet" type="text/css" href="admin_page1.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> 

 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
 </head>
<body>


<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');

$s="SELECT * FROM message where read_n=1" ;
$query_run=mysqli_query($con,$s);
 $count=mysqli_num_rows($query_run)

?>


<div class="header">
<h1>WELCOME</h1>

<nav id="loginid">
		<div class="contains" align="left">
			
				<a href="notification.php">Notification(<?php echo $count; ?>)</a>
			
		</div>
</nav>

<nav id="loginid">
		<div class="contains" align="right">
			
				<a href="login1.php">Logout</a>
			
		</div>
</nav>
</div><br><br>


<div class="button padd" align="center">
<a href="add_emp_page.html">Add Employee</a>
</div><br><br>


<div class="button padd">
<center>
<a href="del_emp_page.html">Remove Employee</a>
</center>
</div>
<br><br>
<div class="button padd">
<a href="view_emp_det_page.html">Employee Details</a>
</div><br><br>
<div class="button padd">
<a href="view_emp_sal_page.html">Employee Salary Details</a>
</div><br><br>
<div class="button padd">
	<a href="name.php">View/Update Employee Details</a>
</div>
</body>
</html>