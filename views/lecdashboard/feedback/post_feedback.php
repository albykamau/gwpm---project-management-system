<?php
include("../config.php"); //error: duplicate def of variables in dashboard
//include("../session.php");// 
//include_once("../session.php");

if(isset($_POST['post_feedback'])){
        $curr_name = mysqli_real_escape_string($mysqli,$_POST['curr_name']);
        $u_email = mysqli_real_escape_string($mysqli,$_POST['u_email']); 
        $category = mysqli_real_escape_string($mysqli,$_POST['category']); 
        $feedb = mysqli_real_escape_string($mysqli,$_POST['feedb']); 
        
        
     /* $sql_uname = "SELECT * FROM admins WHERE u_name='$username'";
        $res_uname = mysqli_query($mysqli, $sql_uname);
  
        if (mysqli_num_rows($res_uname) > 0) { 	
        echo '<script>alert("Sorry, username already taken")</script>';
        header('refresh:0.2;url= adminpanel.php');
        }else{ *///ref 

           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO feedback (fname, email, category, user_feedb) VALUES (?,?,?,?)");
           $stmt -> bind_param("ssss",$curr_name,$u_email,$category,$feedb);
           $stmt -> execute();

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("Feedback Submitted Successfully.")</script>';
              header('refresh:0.2;url= feedback.php');
              
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= feedback.php');
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
     // } //ref
      
}
?>