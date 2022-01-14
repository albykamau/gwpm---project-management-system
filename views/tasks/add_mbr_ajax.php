<?php
include("../config.php"); //error: duplicate def of variables in dashboard
//include("../session.php");// 
//include_once("../session.php");

if(isset($_REQUEST["term"])){
  // Prepare a select statement
  $nm_search = "SELECT * FROM students WHERE fname LIKE ?";
  
  if($stmt = mysqli_prepare($mysqli, $nm_search)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_term);
      
      // Set parameters
      $param_term = $_REQUEST["term"] . '%';
      
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);
          
          // Check number of rows in the result set
          if(mysqli_num_rows($result) > 0){
              // Fetch result rows as an associative array
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  echo "<p>" . $row["fname"] . "</p>";
              }
          } else{
              echo "<p>No matches found</p>";
          }
      } else{
          echo "ERROR: Could not able to execute $nm_search. " . mysqli_error($mysqli);
      }
  }
   
  // Close statement
  mysqli_stmt_close($stmt);
}

// close connection
mysqli_close($mysqli);
?>
               
