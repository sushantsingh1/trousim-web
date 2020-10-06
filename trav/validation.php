<?php
  //session_start();
  $con = mysqli_connect('localhost','root','');
  mysqli_select_db($con,'demo');
  
  $name = $_POST['user'];
  $pass = $_POST['password'];
  
  $s = "select * from login_info where name='$name' && password='$pass'";
  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);

  if($num==1){
    echo"success";
    header('location:index.html');
  }
  else{
    echo"unsucessful";
    header('location:form_login.php ');
    
  }

echo"fox";
 ?>