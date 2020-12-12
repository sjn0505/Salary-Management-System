<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
$emp_id=$_POST['emp_id'];
$s="SELECT * FROM employee where emp_id='$emp_id'" ;
$query_run=mysqli_query($con,$s);
 $num=mysqli_num_rows($query_run);
  if($num==1)
{  
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

	//echo $emp_id;
	//echo "<p style='color:red;'>".$row['emp_name']."</p>";
	//echo "<p class="style">".$row['username']."</p>";
	/*echo "<p style='color:yellow;'>".$row['username']."</p>";
	echo '<div class="style">'.$row['password'].'</div>';
	echo "<h3>"."Department id is"."</h3>";
	echo "<h3>".$row['dep_id']."</h3>";
	echo "<br>";*/
	/*echo "<p style='color:grey;'>"."Employee id           : $emp_id"."</p>";
	echo "<p style='color:grey;'>"."Employee name         : $emp_name"."</p>";
	echo "<p style='color:brown;'>"."Employee username     : $username"."</p>";
	echo "<p style='color:brown;'>"."Employee password     : $password"."</p>";
	echo "<p style='color:brown;'>"."Employee Department_id: $dep_id"."</p>";
	echo "<p style='color:brown;'>"."Employee Phone number : $emp_phn"."</p>";
	echo "<p style='color:brown;'>"."Employee Address      : $emp_address"."</p>";*/

	//echo "<p>".'<i style="color:blue;font-size:30px;font-family:calibri ;">Employee Phone number: $emp_phn".'</i>'"</p>";

	
	echo "<br>";
	echo "<h1>"."Employee Details"."</h1>";
	echo "<br>";
	?>
	<center>
	<table id="customers">
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee id </font>             : $emp_id</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee name </font>           : $emp_name</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee Username </font>       :<i> $username</i></pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee Password</font>        :<i> $password</i></pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee Department_id </font>  : $dep_id</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee Phone Number</font>    : $emp_phn</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee Address</font>         : $emp_address</pre>"."</p>";?></td></tr>
	<tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee Designation</font>     : $designation</pre>"."</p>";?></td></tr>
</table>
</center>
	<style>
		#customers tr:nth-child(odd){background-color: #fafafa;}

		#customers tr:hover {background-color: #f1f1f1;}

		#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
  table-layout: fixed;
  padding:12px,12px,12px,12px;
  border: 2px solid #48d1cc;
  column-width:20px;
  
}

#customers td{
  border: 1px solid #48d1cc;
  column-width: 10px: 
  padding-top: 12px;
  text-align: left;
  padding-bottom: 12px;
  margin:auto;
}

body{

  background-image: url('http://getwallpapers.com/wallpaper/full/e/1/5/990649-download-free-neutral-backgrounds-1920x1080.jpg');
  background-repeat:no-repeat;
  background-position: center;
        background-size: cover;
  height=100%;
}
h1{
	text-align: center;
}
</style>

  <?php
	/*<div class="grid-container">
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee id </font>           :<?php $emp_id?></pre>"."</p>";</div>
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee name </font>         : <?php $emp_name?></pre>"."</p>;</div>
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee Username </font>     :<?php<i> $username?></i></pre>"."</p>";</div>
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee Password</font>      :<?php<i> $password?></i></pre>"."</p>";</div>
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee Department_id </font>:<?php $dep_id?></pre>."</p>";</div>
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee Phone Number</font>  :<?php $emp_phn?></pre>"."</p>";</div>
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee Address</font>       :<?php $emp_address?></pre>"."</p>";</div>
	<div>echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee Designation</font>   : <?php$designation?></pre>"."</p>";</div>
    </div>	
    <?php*/
}
}
else{
	echo "Invalid details.";
}

?>
<!--<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-template-rows: 50px 50px;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

</style>-->