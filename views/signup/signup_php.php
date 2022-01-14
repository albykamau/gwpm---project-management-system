<?php 
  require_once('../config.php');
  $uname = "";
  $email = "";
  if (isset($_POST['submeet'])) {
       // trim - white space from the name and store the name
    $f_name = trim($_POST['name']);
    $uname = trim($_POST['uname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

  	$sql_u = "SELECT * FROM students WHERE username='$uname'";
  	$sql_e = "SELECT * FROM students WHERE email='$email'";
  	$res_u = mysqli_query($mysqli, $sql_u);
  	$res_e = mysqli_query($mysqli, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Email is already in use"; 	
  	}else{ //ref
          // $query = "INSERT INTO users (username, email, password) 
      	    //	  VALUES ('$username', '$email', '".md5($password)."')";
          // $results = mysqli_query($mysqli, $query);
          // echo 'Saved!';
          // exit();


         // prepare and bind
         $stmt = $mysqli -> prepare("INSERT INTO students (fname, username, email, passsword) VALUES (?,?,?,?)");
         $stmt -> bind_param("ssss", $f_name,$uname,$email,$password);
         $stmt -> execute();
       
        // $query = "INSERT INTO students ('name', username, email,'password') VALUES (?,?,?,?)";
        // $stmt = mysqli_prepare($mysqli, $query);
       // mysqli_stmt_bind_param($stmt,"ssss", $f_name,$uname,$email,$password);
        //mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            echo '<script>alert("Success. You can now log in ")</script>';
            header('refresh:2;url= ../login/login.php');
            

            mysqli_stmt_close($stmt);
            mysqli_close($mysqli);
            
        } else {
             
            echo 'Error Occurred<br />';
            echo mysqli_error();
             
            mysqli_stmt_close($stmt);
            
            mysqli_close($mysqli);
        }
 
  	} //ref
  }//main if
?>
