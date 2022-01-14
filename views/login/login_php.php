<?php
include("../config.php");
session_start();

if(isset($_POST['logeen'])){
        $myusername = mysqli_real_escape_string($mysqli,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $query = "SELECT student_id FROM students WHERE username = '$myusername' and passsword = '$mypassword'";
      $result = mysqli_query($mysqli,$query); 
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['logdin_user'] = $myusername;
         
        echo '<script>alert("Login Success.")</script>';
        header('refresh:0.2;url= ../boards/dashboard.php');
         
      }else if($count == 0) {
        echo '<script>alert("Wrong Username or Password")</script>';
        header('refresh:0.1; login.php');
      }
}
?>