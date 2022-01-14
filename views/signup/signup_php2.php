<?php
//require_once ("../config.php");

if(isset($_POST['submeet'])){
    $data_missing = array();
    if(empty($_POST['name'])){
     // Adds name to array
        $data_missing[] = 'name';
    } else {
        // Trim white space from the name and store the name

        $f_name = trim($_POST['name']);
    }
    if(empty($_POST['email'])){
        // Adds name to array
        $data_missing[] = 'email';
    } else{
        // Trim white space from the name and store the name

        $email = trim($_POST['email']);
    }
    if(empty($_POST['uname'])){
        // Adds name to array
        $data_missing[] = 'uname';
    } else{
        // Trim white space from the name and store the name

        $uname = trim($_POST['uname']);
    }

    if(empty($_POST['password'])){
        // Adds name to array
        $data_missing[] = 'password';
    }else{
        // Trim white space from the name and store the name

        $password = trim($_POST['password']);
    }   
        if(empty($data_missing)){
            
            require_once('../config.php');
            
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
                
            } else {
             
            echo 'You need to enter the following data<br />';
             
            foreach($data_missing as $missing){
              
               echo "$missing<br />";
               
            }
          
        }
     }
     ?>