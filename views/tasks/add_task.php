<?php
include("../config.php"); //error: duplicate def of variables in dashboard
//include("../session.php");// 
//include_once("../session.php");

if(isset($_POST['create_task'])){
        $taskname = mysqli_real_escape_string($mysqli,$_POST['task_name']);
        $group = mysqli_real_escape_string($mysqli,$_POST['group']); 
        $assignee = mysqli_real_escape_string($mysqli,$_POST['assignee']);
        $t_descrip = mysqli_real_escape_string($mysqli,$_POST['task_descrip']); 
        $t_priority= mysqli_real_escape_string($mysqli,$_POST['task_priority']);
        $t_deadline = mysqli_real_escape_string($mysqli,$_POST['task_deadline']); 
        $t_files = mysqli_real_escape_string($mysqli,$_POST['filez']);
        $t_creator = mysqli_real_escape_string($mysqli,$_POST['task_creator']);

        //convert task creator to student id
        $stu_sql = "SELECT * FROM students WHERE fname = '$t_creator'"; 
        $sql_stu=mysqli_query($mysqli,$stu_sql);
        $res_stu = mysqli_fetch_assoc($sql_stu);
        $t_creator_id= $res_stu['student_id'];

        //convert assignee to the stuednts id
        $ass_sql = "SELECT * FROM students WHERE fname = '$assignee'"; 
        $sql_ass=mysqli_query($mysqli,$ass_sql);
        $res_ass = mysqli_fetch_assoc($sql_ass);
        $assignee_id=$res_ass['student_id'];

        //convert group name to group id
        $sql_grp = "SELECT * FROM groups_list WHERE group_name = '$group'"; 
        $grp_sql=mysqli_query($mysqli,$sql_grp);
        $res_grp = mysqli_fetch_assoc($grp_sql);
        $grp_id= $res_grp['group_id'];

           // prepare and bind
           $stmt = $mysqli -> prepare("INSERT INTO project_tasks (student_id, task_name, task_description, deadline, prioritee, group_id) VALUES (?,?,?,?,?,?)");
           $stmt -> bind_param("issssi", $assignee_id,$taskname,$t_descrip,$t_deadline,$t_priority,$grp_id);
           $stmt -> execute();

           //task files upload

          $affected_rows = mysqli_stmt_affected_rows($stmt);
          
          if($affected_rows == 1){
              echo '<script>alert("Task added ")</script>';
              header('refresh:0.2;url= tasks.php');
              
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
              
          } else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= tasks.php');
              //echo mysqli_error();
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
     // } //ref
      
}
?>