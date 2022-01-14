<?php
include("../config.php"); //error: duplicate def of variables in dashboard
//include("../session.php");// 
//include_once("../session.php");

if(isset($_POST['addadmin'])){
        $admin_name = mysqli_real_escape_string($mysqli,$_POST['admin_name']);
        $username = mysqli_real_escape_string($mysqli,$_POST['username']); 
        $admin_mail = mysqli_real_escape_string($mysqli,$_POST['admin_mail']); 
        $admin_pword = mysqli_real_escape_string($mysqli,$_POST['admin_pword']); 
        
        
     $sql_uname = "SELECT * FROM admins WHERE u_name='$username'";
      $res_uname = mysqli_query($mysqli, $sql_uname);
  
      if (mysqli_num_rows($res_uname) > 0) { 	
        echo '<script>alert("Sorry, username already taken")</script>';
        header('refresh:0.2;url= adminpanel.php');
      }else{ //ref 

           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO admins (u_name, fname, email, passsword) VALUES (?,?,?,?)");
           $stmt -> bind_param("ssss",$username,$admin_name,$admin_mail,$admin_pword);
           $stmt -> execute();

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("New Admin added ")</script>';
              header('refresh:0.2;url= adminpanel.php');
              
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= adminpanel.php');
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
      } //ref
      
}
?>