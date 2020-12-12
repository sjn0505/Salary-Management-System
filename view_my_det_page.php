<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
//$emp_id=$_POST['emp_id'];
$emp_id = $_SESSION['emp_id'];
$s="SELECT * FROM employee where emp_id='$emp_id'" ;
$query_run=mysqli_query($con,$s);
while($row=mysqli_fetch_array($query_run))
{
	
	$emp_id=$row['emp_id'];
	$emp_name=$row['emp_name'];
	$username=$row['username'];
	$password=$row['password'];
	$emp_phn=$row['emp_phn'];
	$emp_address=$row['emp_address'];
	$dep_id=$row['dep_id'];
	$designation=$row['designation'];

	
	echo "<br>";
	echo "<h1>"."My Details"."</h1>";
	echo "<br>";
	?>
	<center>
	<table id="customers">
	
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Id </font>           : $emp_id</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Name </font>         : $emp_name</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Username </font>     :<i> $username</i></pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Password</font>      :<i> $password</i></pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Department_id </font>: $dep_id</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Phone Number</font>  : $emp_phn</pre>"."</p>";?></td></td>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Address</font>       : $emp_address</pre>"."</p>";?></td></td>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Designation</font>   : $designation</pre>"."</p>";?></td></tr>
	</table>
</center>

	<style>
		

		#customers tr{background-color: #ffffff;}

		#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
  table-layout: fixed;
  padding:12px,12px,12px,12px;
  border: 2px solid #191970;
  column-width:20px;
  
}

#customers td{
  border: 1px solid #191970;
  column-width: 10px: 
  padding-top: 12px;
  text-align: left;
  padding-bottom: 12px;
  margin:auto;
}

body{

  background-image: url('https://www.enhancedtech.com/wp-content/uploads/2018/07/AI-world-forum-background-cropped-1920x1000.jpg');
  background-repeat:no-repeat;
  background-position: center;
        background-size: cover;
  height=100%;
} 
h1{
	text-align: center;
	color:#ffa07a;
}
</style>
<?php
}
	
	?>