<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['logdin_admin'];
   
   $ses_sql = mysqli_query($mysqli,"SELECT u_name from admins where u_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['u_name'];

   //full name of logd in user
   $query2 = mysqli_query($mysqli,"SELECT fname FROM admins WHERE u_name = '$user_check'");
   $fname = mysqli_fetch_array($query2,MYSQLI_ASSOC);
   $login_details = $fname['fname'];
   
   if(!isset($_SESSION['logdin_admin'])){
      header("location:/views/admin-master/adminlogin.php");
      die();
   }
?>