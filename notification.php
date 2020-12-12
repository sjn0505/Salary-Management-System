


<center>
<h2>Notification</h2>

<!--<h3><a href="update_details.php">EDIT</a></h3>-->
</center>
<a class="margin" href="admin_page.php">BACK</a><br>
<table id="customers">
	<tr>
				<th>EMP_ID</th>
				<th>MESSAGE</th>
				<th>DATE/TIME</th>
				<!--<th>PASSWORD</th>
				<th>PHONE_NO</th>
				<th>ADDRESS</th>
				<th>DEP_ID</th>
				<th>DESIGNATION</th>-->
				<th>VIEW</th>
				
			 </tr>
	</table>	 	
 	
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'salaryms');
$emp_id = $_SESSION['emp_id'];
$s="SELECT * from message where emp_id='$emp_id';" ;
$query_run=mysqli_query($con,$s);
//$num=mysqli_num_rows($query_run);

//if($num)



	

  while($row=mysqli_fetch_array($query_run))
	{
		?>
		
		<table id="customers" >
			<tr>

	     	<td><?php echo  $row['emp_id']      ?></td>
	     	<td><?php echo  $row['msg']    ?></td>
	     	<td><?php echo  $row['time']    ?></td>
	     	<td>
	     	<?php echo "<a href=notification_view.php?emp_id=".$row['emp_id'].">VIEW</a>" ?></td>
	     	
	     

	     </tr>
			
		</table>
	
	    
	<!--echo "$emp_name";-->

	

	     <?php
	}
	


/*$st=$con->prepare($s);
$st->execute();
$names = $st->fetchAll(PDO::FETCH_ASSOC);

print_r($names);*/

?>
<!--<style type="text/css">
table,th,td{
    border:1px solid black;
    width:100px;
    background-color: #f1f1f1;
    text-align: center;

 }-->

 
 
 <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  table-layout: fixed;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  column-width: 20px: 
  padding-top: 12px;
  padding-bottom: 12px;
  white-space:nowrap;
  height:auto;
  overflow:hidden;
  
}

#customers tr:nth-child(even){background-color: #5a8c8c;}

#customers tr:hover {background-color: #e0ebeb;}

#customers th {
  margin: auto;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #009966;
  color: white;
}

h3{
	border:1px solid black;
	padding:4px 4px 4px 4px;
	float:right;
}

.margin{
		text-align:right;
		float:right;
		border:1px solid #A9A9A9;
		background-color: #A9A9A9;
		padding:5px;
		border-collapse:separate;
		border-spacing: 20px;
	}

/*.a{
	text-align: center;
	background-color: #20b2aa;
	height:auto;
}*/
/*body{
	background-color: #3c5d5d;
}*/

/*table,td,th,tr{
	        width:40%;
			height:5%;
			border:1px;
			border-radius:05px;
			padding:8px 15px 8px 15px;
			margin:10px 0px 10px 0px;
			box-shadow:1px 1px 2px 1px grey;*/
}
</style>
