<?php
include("../config.php");

if (isset($_POST['send_msg'])){


  // Escape user inputs for security
  $un= mysqli_real_escape_string($mysqli, $_REQUEST['uname']);
  $m = mysqli_real_escape_string($mysqli, $_REQUEST['msg']);

  date_default_timezone_set('Africa/Nairobi');
  $ts=date('d-m-y h:ia');
  
  // Attempt insert query execution
  $sql = "INSERT INTO chats (uname, msg, dt) VALUES ('$un', '$m', '$ts')";
  if(mysqli_query($mysqli, $sql)){
    header('refresh:0.01;url= chat.php');
    
  } else{
    echo "ERROR: Message not sent!!!";
    header('refresh:1;url= chat.php');
  }
  // Close connection
  mysqli_close($mysqli);
  }


  if (isset($_POST['send_priv_msg'])){


    // Escape user inputs for security
    $un= mysqli_real_escape_string($mysqli, $_REQUEST['uname']);
    $m = mysqli_real_escape_string($mysqli, $_REQUEST['msg']);
  
    date_default_timezone_set('Africa/Nairobi');
    $ts=date('d-m-y h:ia');
    
    // Attempt insert query execution
    $sql = "INSERT INTO chats (uname, msg, dt) VALUES ('$un', '$m', '$ts')";
    if(mysqli_query($mysqli, $sql)){
      header('refresh:0.01;url= chat.php');
      
    } else{
      echo "ERROR: Message not sent!!!";
      header('refresh:1;url= chat.php');
    }
    // Close connection
    mysqli_close($mysqli);
    }
  ?>