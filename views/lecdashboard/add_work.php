<?php
include("../config.php"); 

if(isset($_POST['addwork'])){
        $title = mysqli_real_escape_string($mysqli,$_POST['title']);
        $unit = mysqli_real_escape_string($mysqli,$_POST['unit']); 
        $w_descrip = mysqli_real_escape_string($mysqli,$_POST['work_descrip']); 
        $duedate = mysqli_real_escape_string($mysqli,$_POST['duedate']); 
        
        //convert lecname to lecid
        $lecturer = mysqli_real_escape_string($mysqli,$_POST['lec']);
        $lec_sql = "SELECT * FROM lecturers WHERE fname = '$lecturer'"; 
        $sql_lec=mysqli_query($mysqli,$lec_sql);
        $res_lec = mysqli_fetch_assoc($sql_lec);
        $lectid= $res_lec['lecturer_id'];

      //convert unit input to unit_id
        $sql = "SELECT * FROM units WHERE unit_name = '$unit'"; 
        $sql_unit=mysqli_query($mysqli,$sql);
        $res_unit = mysqli_fetch_assoc($sql_unit);
        $unit_id= $res_unit['unit_id'];


//file upload

//file upload end

           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO unit_project (lecturer_id, unit_id, project_name, project_description, due_date) VALUES (?,?,?,?,?)");
           $stmt -> bind_param("iisss", $lectid,$unit_id,$title,$w_descrip,$duedate);
           $stmt -> execute();

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("Work added ")</script>';
              header('refresh:0.2;url= lecdashboard.php');
              
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= lecdashboard.php');
              //echo mysqli_error();
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
     // } //ref
      
}
?>