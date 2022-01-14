<?php
include("../config.php"); //error: duplicate def of variables in dashboard
//include("../session.php");// 
//include_once("../session.php");

if(isset($_POST['edit_details'])){
        $new_fname = mysqli_real_escape_string($mysqli,$_POST['new_fname']);
        $new_uname = mysqli_real_escape_string($mysqli,$_POST['new_uname']); 
        $new_regno = mysqli_real_escape_string($mysqli,$_POST['new_regno']); 
        $new_mail = mysqli_real_escape_string($mysqli,$_POST['new_mail']); 
        
        
     $sql_update = "UPDATE students SET fname ='$new_fname', username ='$new_uname', regno ='$new_regno', email ='$new_mail' WHERE student_id='$stuid'";
      $res_update = mysqli_query($mysqli, $sql_update);
  
      if (mysqli_stmt_affected_rows($res_update) > 0) { 	
        echo '<script>alert("Details Updated ")</script>';
              header('refresh:0.2;url= userdetails.php');

              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);

      }else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= userdetails.php');
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
      }      

?>