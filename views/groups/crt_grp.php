<?php
include("../config.php"); 

if(isset($_POST['formgroop'])){
        $gname = mysqli_real_escape_string($mysqli,$_POST['gname']);
        $g_descrip = mysqli_real_escape_string($mysqli,$_POST['grp_descrp']); 
        $gunit = mysqli_real_escape_string($mysqli,$_POST['unit']); 
        $creator = mysqli_real_escape_string($mysqli,$_POST['gcreator']); 

      //convert unit input to project id
        $sql = "SELECT * FROM unit_project WHERE project_name = '$gunit'"; 
        $sql_unit=mysqli_query($mysqli,$sql);
        $res_unit = mysqli_fetch_assoc($sql_unit);
        $proj_id= $res_unit['project_id'];

      $sql_gname = "SELECT * FROM groups_list WHERE group_name='$gname'";
      $res_gname = mysqli_query($mysqli, $sql_gname);
  
      if (mysqli_num_rows($res_gname) > 0) {	
        echo '<script>alert("Sorry...group name already taken")</script>';
      }else{ //ref
           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO groups_list (group_name, project_id, group_description, created_by) VALUES (?,?,?,?)");
           $stmt -> bind_param("siss", $gname,$proj_id,$g_descrip,$creator);
           $stmt -> execute();

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("Group Created ")</script>';
              header('refresh:2;url= ../groups/groups.php');
              
             // mysqli_stmt_close($stmt);
            //mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= dashboard.php');
              //echo mysqli_error();
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }

          //convert creator name input to student id
          $mbr_sql = "SELECT * FROM students WHERE fname = '$creator'"; 
          $sql_mbr=mysqli_query($mysqli,$mbr_sql);
          $res_mbr = mysqli_fetch_assoc($sql_mbr);
          $stu_id= $res_mbr['student_id'];
          //convert group  name input to group id
          $grp_add_sql = "SELECT * FROM groups_list WHERE group_name = '$gname'"; 
          $sql_grp=mysqli_query($mysqli,$grp_add_sql);
          $res_grp = mysqli_fetch_assoc($sql_grp);
          $grp_id= $res_grp['group_id'];

          $role="leader";

          //add group creator to group
          $stmt2 = $mysqli -> prepare("INSERT INTO group1 (group_id, student_id, member_role) VALUES (?,?,?)");
           $stmt2 -> bind_param("iis", $grp_id,$stu_id,$role);
           $stmt2 -> execute();

           $affected_rows2 = mysqli_stmt_affected_rows($stmt2);

           if($affected_rows < 1){
            echo '<script>alert("Error: Creator not added to group ")</script>';
            header('refresh:0.1;url= groups.php');
            
            mysqli_stmt_close($stmt);
            mysqli_close($mysqli);
            
        }else{
            mysqli_stmt_close($stmt);
            mysqli_close($mysqli);
        }

      } //ref
      
}
?>