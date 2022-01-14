<?php
include("../config.php"); 

if(isset($_POST['admin_adduser'])){
        $f_name = mysqli_real_escape_string($mysqli,$_POST['f_name']);
        $uname = mysqli_real_escape_string($mysqli,$_POST['uname']); 
        $regno = mysqli_real_escape_string($mysqli,$_POST['regno']);  
        $email = mysqli_real_escape_string($mysqli,$_POST['mail']);
        $password = mysqli_real_escape_string($mysqli,$_POST['passw']);
        


      $sql_checkmember = "SELECT * FROM students WHERE email='$email'";
      $res_checkmember = mysqli_query($mysqli, $sql_checkmember);
  
      if (mysqli_num_rows($res_checkmember) > 0) {	
        echo '<script>alert("User already exists")</script>';
        header('refresh:0.1;url= adminpanel.php');
      }else{ //ref
           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO students (fname, username, regno, email, passsword) VALUES (?,?,?,?,?)");
           $stmt -> bind_param("sssss", $f_name,$uname,$regno,$email,$password);
           $stmt -> execute();

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("User added ")</script>';
              header('refresh:0.1;url= adminpanel.php');
              
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= adminpanel.php');
              //echo mysqli_error();
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
      } //ref
      
}
?>