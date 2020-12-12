

<?php
  session_start();
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'salaryms');
  $username=$_POST['user'];
  $password=$_POST['pass'];

  $s="select *from admin where username='$username' and password='$password' ";
  $res=mysqli_query($con, $s);
  while($row=mysqli_fetch_array($res))
  {
    $admin_id=$row['admin_id'];
  }
  $num=mysqli_num_rows($res);
  if($num==1)
  {
    //echo "login successfully";
     $_SESSION['admin_id'] = $admin_id;
     header("Location:admin_page.php");
  }
  else
  {
    echo "invalid details";
  }

?>
