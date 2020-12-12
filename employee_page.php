

<?php
  session_start();
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'salaryms');
  $username=$_POST['user'];
  $password=$_POST['pass'];
  $s="select *from employee where username='$username' and password='$password' ";
  $query_run=mysqli_query($con,$s);
   while($row=mysqli_fetch_array($query_run))
  {
    $emp_id=$row['emp_id'];
  }
 // $_SESSION['emp_id'] =' $emp_id';
  //name="emp_id" value="";
   // $res=mysqli_query($con, $s);

    $num=mysqli_num_rows($query_run);
    if($num==1)
  {
    //echo "login successfully";
    //echo "Hello $emp_id";
   /* echo '</br></br><form  action="view_my_sal_det.php"  method="post"/>
    <input type="text" name="$emp_id" value=""/>
    <input type="submit" name="submit"  class="button" value="View Salary Details" /><br>
    
    </form>';*/
   // <script> window.location.href = "view_my_sal.php" + $emp_id; </script>
   // echo<form  action="view_my_sal_det.php"  method="post">
    //<input type ="text" name="submit" class="button" value="View my salary"/><br>
    //</form>
    $_SESSION['emp_id'] = $emp_id;
    header("Location:employee_page1.php");

  }
  else
  {
    echo "invalid details";
  }

?>

 
