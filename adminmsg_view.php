<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
//$emp_id=$_POST['emp_id'];
$emp_id = $_GET['emp_id'];
//$_SESSION['emp_id']=$emp_id;
$s="SELECT emp_name,message,date_time FROM employee,adminmsg where employee.emp_id='$emp_id' and adminmsg.emp_id='$emp_id'" ;
$query_run=mysqli_query($con,$s);
$sa="UPDATE adminmsg SET read_a='0' where emp_id='$emp_id'";
$qs=mysqli_query($con,$sa);
while($row=mysqli_fetch_array($query_run))
{
	
	//$emp_id=$row['emp_id'];
	$emp_name=$row['emp_name'];
	$msg=$row['message'];
	$time=$row['date_time'];

	/*$password=$row['password'];
	$emp_phn=$row['emp_phn'];
	$emp_address=$row['emp_address'];
	$dep_id=$row['dep_id'];
	$designation=$row['designation'];*/
?>

<div class="border">
	<p class="align"> <?php echo "TIME: $time";?></p> 
    
	<p> <?php echo "EMPLOYEE ID: $emp_id";?></p>

	<p> <?php echo "EMPLOYEE Name: $emp_name";?></p>


	<p> <?php echo " ADMIN MESSAGE:     $msg";?></p>

	<div class="marg border">

	<a href="request_page.html">REPLY</a>

	<a class="margin" href="adminmsg.php">BACK</a>

</div>
</div>
	

<?php
}
?>

<style>
	.align{
		text-align: right;
	}

	a{
		float:left;
		border:1px solid #A9A9A9;
		background-color: #A9A9A9;
		padding:5px;
		border-collapse:separate;
		border-spacing: 20px;
	}

	.margin{
		margin-left: 10%;
	}

	.marg{
		margin-top: 8%;
	}

	.border{
		border:1px solid #f1f1f1;
	}
</style>
	

	
