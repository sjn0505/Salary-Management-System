<?php
   session_start();
   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'salaryms');
  // $emp_id=$_POST['emp_id'];
  
   $emp_id = $_SESSION['emp_id'];
   
   $s="SELECT * FROM salary_details where emp_id='$emp_id'" ;
   $query_run=mysqli_query($con,$s);
   while($row=mysqli_fetch_array($query_run))
  {
    
    $basic=$row['basic'];
    $bonus=$row['bonus'];
  }

   $q="SELECT * FROM deductions where emp_id='$emp_id'" ;
   $query_runs=mysqli_query($con,$q);
   while($rows=mysqli_fetch_array($query_runs))
  {
    
    $tax=$rows['tax'];
    $pf=$rows['pf'];
    $lev=$rows['leaves'];
  }
 
 $a=3;
 $b=50;
  if($lev>"3")
  {
    
    $deduct=(($lev-$a)*$b);
  }
  else{
    $deduct=0;
  }
  // echo "$deduct";
   echo "<br>";
    echo "<h1>"."Salary Details"."</h1>";
    echo "<br>";
    ?>
  <center>
  <table id="customers">
  
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Id </font>          : $emp_id</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Basic salary</font> : $basic</pre>"."</p>";?></td></tr>
   <tr><td><?php  echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Bonus </font>       : $bonus</pre>"."</p>";?></td></tr>
   <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Tax   </font>        : $tax</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>PF</font>            : $pf</pre>"."</p>";?></td></tr>
   <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Leaves</font>        : $lev</pre>"."</p>";?></td></tr>
   <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Leave deductions</font>: $deduct</pre>"."</p>";?></td></tr>
   <?php $ans=$basic-$tax-$pf-$deduct+$bonus;?>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='191970' ><pre>Total Salary Obtained</font>: $ans</pre>"."</p>";?></td></tr>
   
<!--?>-->

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
  font-size: 15px;

  
}

#customers td{
  border: 1px solid #191970;
  column-width: 10px: 
  padding-top: 12px;
  text-align: left;
  padding-bottom: 12px;
  margin:auto;
  height:auto;
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
