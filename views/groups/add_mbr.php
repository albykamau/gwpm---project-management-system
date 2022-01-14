<?php
include("../config.php"); 

if(isset($_POST['add_member'])){
        $mbr_name = mysqli_real_escape_string($mysqli,$_POST['mbr_name']);
        $role = mysqli_real_escape_string($mysqli,$_POST['role']); 
        $group_to_add = mysqli_real_escape_string($mysqli,$_POST['group']);  
        //$creator = ("test");

      //$query = "SELECT student_id FROM students WHERE username = '$myusername' and passsword = '$mypassword'";

        //convert member name input to student id id
        $mbr_sql = "SELECT * FROM students WHERE fname = '$mbr_name'"; 
        $sql_mbr=mysqli_query($mysqli,$mbr_sql);
        $res_mbr = mysqli_fetch_assoc($sql_mbr);
        $stu_id= $res_mbr['student_id'];

        //convert group  name input to group id
        $grp_add_sql = "SELECT * FROM groups_list WHERE group_name = '$group_to_add'"; 
        $sql_grp=mysqli_query($mysqli,$grp_add_sql);
        $res_grp = mysqli_fetch_assoc($sql_grp);
        $grp_id= $res_grp['group_id'];


      $sql_checkmember = "SELECT * FROM group1 WHERE student_id='$stu_id' AND group_id='$grp_id'";
      $res_checkmember = mysqli_query($mysqli, $sql_checkmember);
  
      if (mysqli_num_rows($res_checkmember) > 0) {
        //$gname_error = "Sorry... name already taken"; 	
        echo '<script>alert("User is already part of the group")</script>';
        header('refresh:0.1;url= groups.php');
      }else{ //ref
           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO group1 (group_id, student_id, member_role) VALUES (?,?,?)");
           $stmt -> bind_param("iis", $grp_id,$stu_id,$role);
           $stmt -> execute();

           //$stmt = $mysqli -> prepare("INSERT INTO group_list (project_name, project_id, group_description, created_by) VALUES (?,?,?,?)");
           //$stmt -> bind_param("sss", $gname,$gunit,$g_descrip,$creator);

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("Member added ")</script>';
              header('refresh:0.1;url= groups.php');
              
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= groups.php');
              //echo mysqli_error();
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
      } //ref
      
}
?>