<?php
include("../config.php");
session_start();

if(isset($_POST['admin_logeen'])){
        $myusername = mysqli_real_escape_string($mysqli,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $query = "SELECT admin_id FROM admins WHERE u_name = '$myusername' and passsword = '$mypassword'";
      $result = mysqli_query($mysqli,$query); //or die( mysqli_error($db));
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['logdin_admin'] = $myusername;
         
        echo '<script>alert("Login Success.")</script>';
        header('refresh:0.2;url= ./adminpanel.php');
         
      }else if($count == 0) {
          //$pw_error = "Wrong Username or Password";
        echo '<script>alert("Wrong Username or Password")</script>';
        header('refresh:0.1; adminlogin.php');
         //$error = "Your Login Name or Password is invalid";
      }

}
?>