<?php
include("../config.php"); //error: duplicate def of variables in dashboard
//include("../session.php");// 
//include_once("../session.php");

if(isset($_POST['formgroop'])){
        $gname = mysqli_real_escape_string($mysqli,$_POST['gname']);
        $g_descrip = mysqli_real_escape_string($mysqli,$_POST['grp_descrp']); 
        $gunit = mysqli_real_escape_string($mysqli,$_POST['unit']); 
        $creator = mysqli_real_escape_string($mysqli,$_POST['gcreator']); 
        //$creator = ("test");

      //$query = "SELECT student_id FROM students WHERE username = '$myusername' and passsword = '$mypassword'";

      //convert unit input to project id
        $sql = "SELECT * FROM unit_project WHERE project_name = '$gunit'"; 
        $sql_unit=mysqli_query($mysqli,$sql);
        $res_unit = mysqli_fetch_assoc($sql_unit);
        $proj_id= $res_unit['project_id'];


      $sql_gname = "SELECT * FROM groups_list WHERE group_name='$gname'";
      $res_gname = mysqli_query($mysqli, $sql_gname);
  
      if (mysqli_num_rows($res_gname) > 0) {
        //$gname_error = "Sorry... name already taken"; 	
        echo '<script>alert("Sorry...group name already taken")</script>';
      }else{ //ref
           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO groups_list (group_name, project_id, group_description, created_by) VALUES (?,?,?,?)");
           $stmt -> bind_param("siss", $gname,$proj_id,$g_descrip,$creator);
           $stmt -> execute();

           //$stmt = $mysqli -> prepare("INSERT INTO group_list (project_name, project_id, group_description, created_by) VALUES (?,?,?,?)");
           //$stmt -> bind_param("sss", $gname,$gunit,$g_descrip,$creator);

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("Group Created ")</script>';
              header('refresh:2;url= ../groups/groups.php');
              
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= dashboard.php');
              //echo mysqli_error();
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }

              //adding creator to group
              //first convert creator to student id         
              $studid = "SELECT student_id From students WHERE fname = '$creator' "; 
              $sql_studid=mysqli_query($mysqli,$studid);
              $res_studid = mysqli_fetch_assoc($sql_studid);
              $idstud= $res_studid['student_id'];
              //second get group id
              $grpid = "SELECT group_id From groups_list WHERE group_name = '$gname' "; 
              $sql_grpid=mysqli_query($mysqli,$grpid);
              $res_grpid = mysqli_fetch_assoc($sql_grpid);
              $gid=$res_grpid['group_id'];
              //third add gcreator to group1 as a member
              $glrole="Group leader"; //set creators default role as gl in db
              $stmt2= $mysqli -> prepare("INSERT INTO group1 (group_id, student_id,member_role) VALUES (?,?,?)");
              $stmt2 -> bind_param("iis", $gid,$idstud,$glrole);
              $stmt2 -> execute();

      } //ref
      
}
?>