<!--<!DOCTYPE html>
<html>
<head>
    <title>Employee salary details</title>
    <style>
        body{
            background-image:url(https://st2.depositphotos.com/1620675/9248/i/950/depositphotos_92489052-stock-photo-abstract-light-color-background.jpg);
        }
        table{
            border-collapse:collapse;
            width:100%;
            color:#588c7e;
            font-family:monospace;
            font-size:25px;
            text-align:left;
        }
        th{
            background-color:#588c7e;
            color:white;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
</head>
<body>-->
    <!--<table>
        <tr>
            <th>Basic</th>
            <th>Bonus</th>
            <th>Tax</th>
            <th>PF</th>
        </tr>-->
<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'salaryms');
    $emp_id=$_POST['emp_id'];
   /* $s="SELECT basic,bonus FROM employee where emp_id='$emp_id'" ;
    $query_run=mysqli_query($con,$s);
    while($row=mysqli_fetch_array($query_run))
 {
    $basic=$row['basic'];
    $bonus=$row['bonus'];
 }    
    $sd="SELECT tax,pf FROM employee where emp_id='$emp_id'";
    $query_run=mysqli_query($con,$sd);
    while($rst=mysqli_fetch_array($query_run))
   {
     $tax=$rst['tax'];
     $pf=$rst['pf'];
    }*/
   /* $s="SELECT basic,bonus,tax,pf FROM salary_details JOIN deductions ON salary_details.emp_id=deductions.emp_id where emp_id='$emp_id'" ;
   $query_run=mysqli_query($con,$s);
   while($row=mysqli_fetch_array($query_run))
{
    
    $basic=$row['basic'];
    $bonus=$row['bonus'];
    $tax=$row['tax'];
    $pf=$row['pf'];
    echo "<br>";
    echo "<h1>"."Employee Details of '$emp_id'"."</h1>";
    echo "<br>";
    

    //echo "<tr><td>". $basic ."</td><td>" .$bonus."</td><td>".$tax.</td><td>.$pf.</td></tr>;
     echo "<p style='text-align:left;'>"."<font color='red' ><pre>Employee Id</font>     : $emp_id</pre>"."</p>";
        echo "<p style='text-align:left;'>"."<font color='red' ><pre>Basic Salary </font>: $basic</pre>"."</p>";
    echo "<p style='text-align:left;'>"."<font color='red' ><pre>Bonus</font>            : $bonus</pre>"."</p>";
    echo "<p style='text-align:left;'>"."<font color='red' ><pre>Tax</font>              : $tax</pre>"."</p>";
    echo "<p style='text-align:left;'>"."<font color='red' ><pre>PF</font>               : $pf</pre>"."</p>";
    
  }  
    ?>*/

   //</table>

   $s="SELECT * FROM salary_details where emp_id='$emp_id'" ;
   $query_run=mysqli_query($con,$s);
   $query_run=mysqli_query($con,$s);
  $num=mysqli_num_rows($query_run);
  if($num==1)
{  
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
  }

echo "<br>";
    echo "<h1>"."Employee Salary Details"."</h1>";
    echo "<br>";
    ?>

    <center>
    <table id="customers">  
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee id </font>           : $emp_id</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee's basic salary</font>: $basic</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee's bonus </font>      : $bonus</pre>"."</p>";?></td></tr>
    <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee's tax   </font>      : $tax</pre>"."</p>";?></td></tr>
   <tr><td><?php echo "<p style='text-align:left;'>"."<font color='#191970' ><pre>Employee's PF</font>          : $pf</pre>"."</p>";?></td></tr>


</table>
</center>
  

  <?php
}

else
{
    echo "invalid details";
}
   
?>

<style>
    #customers tr:nth-child(odd){background-color: #fafafa;}

    #customers tr:hover {background-color: #f1f1f1;}

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