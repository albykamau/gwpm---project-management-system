<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['logdin_user'];
   
   $ses_sql = mysqli_query($mysqli,"select username from students where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];

   //full name of logd in user
   $query2 = mysqli_query($mysqli,"SELECT fname FROM students WHERE username = '$user_check'");
   $fname = mysqli_fetch_array($query2,MYSQLI_ASSOC);
   $login_details = $fname['fname'];
   
   if(!isset($_SESSION['logdin_user'])){
      header("location:/views/login/login.php");
      die();
   }
?>