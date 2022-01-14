<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include('../adminsession.php');
   //include('crt_grp.php')
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../../public/scripts/jquery-3.6.0.min.js" ></script><!-- LOCAL-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/bootstrap-5.1.3-dist/css/bootstrap.min.css" ><!-- LOCAL-->
    
    <link rel="stylesheet" href="./css/shortened.css"> <!-- CHECK & SHORTEN CSS!-->

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script src="../../public/fontawesome-6.0.0-web/js/solid.js" ></script><!-- LOCAL-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="../../public/fontawesome-6.0.0-web/js/fontawesome.js" ></script><!-- LOCAL-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/fontawesome-6.0.0-web/css/font-awesome.min.css" ><!-- LOCAL-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../../public/scripts/jquery-3.3.1.slim.min.js" ></script><!-- LOCAL-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../../public/scripts/popper.min.js" ></script><!-- LOCAL-->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../public/bootstrap-5.1.3-dist/js/bootstrap.min.js" ></script><!-- LOCAL-->

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="overflow: auto">
            <div class="sidebar-header">
                <strong style="align:center; ">Group Projects Management System - ADMIN</strong>
            </div>
            
           

            <ul class="list-unstyled components">
                <!-- Order: dashb, groups (dropdown), kanban, user activity (report), tasks, to do, chats, feedback, logout   -->
                <li class="active">
                    <a href="adminpanel.php"><i class="fas fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
                </li>

                <li>
                    <a href="stats.php"><i class="fas fa-chart-pie" aria-hidden="true"></i> &nbsp; Stats</a>
                </li>

                <li>
                    <a href="mods.php" target="__blank"> <i class="fa fa-edit" aria-hidden="true"></i> &nbsp; &nbsp; Mods</a>
                </li>
<hr>
                <li>
                    <a href="adminsettings.php"> <i class="fas fa-cogs" aria-hidden="true"></i> &nbsp;&nbsp; Settings</a>
                </li>

                <li>
                    <a href="adminprofile.php"> <i class="fas fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp; My Profile</a>
                </li>

                <li>
                    <a href="../logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> &nbsp;&nbsp; Logout </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../feedback/adminfeedback.php" class="download">Feedback</a>
                </li>
                <li>
                    <a href="../about.html" class="article">About GWPM</a>
                </li>

            </ul>

        </nav>



        <!-- Page Content  -->
        <div id="content">

            <!-- Top Nav Bar  -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info btn-info btn-dark">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    

                    <div class="float-right">
                    <button class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;" type="button" data-toggle="modal" onclick="document.getElementById('id01').style.display='block'">
                            <i class="fas fa-calendar-plus fa-sm"></i>
                            &nbsp; ACTIONS 
                        </button>

                        <!--ACTIONS MODAL-->
                         <div id="id01" class="modal">
                            
                            <form class="modal-content animate" action="add_admin.php" method="post">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <div class="mt-4 text-center">
                                        Go to<a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=gwpm" target="_blank">Backend (PHP MyAdmin)</a>
                                    </div>
                                    <br><hr>
                                    <h2>Add an administrator</h2>
                                    <div class="form-group">
                                        <label for="admin_name"><b>Name</b></label>
                                        <input type="text"  name="admin_name" style="width: 80%;"class="form-control" required>
                                        <br>
                                        <label for="username"><b>Username</b></label>
                                        <input type="text" name="username" style="width: 80%;"class="form-control" required>
                                        <label for="admin_mail"><b>Email</b></label>
                                        <input type="text" name="admin_mail" style="width: 80%;"class="form-control" required>
                                        <label for="admin_pword"><b>Password</b></label>
                                        <input type="text" name="admin_pword" style="width: auto;"class="form-control" required>
                                        <br>
                                    </div>

                                </div>

                                <div class="container" style="background-color:#f1f1f1">
                                    <button type="submit" name="addadmin"class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                    ADD
                                    </button>
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                    CANCEL
                                    </button>
                                </div>
                            </form>
                        </div><!--END OF ADD ADMIN MODAL-->


                    </div>

                     <!-- Logged in user  -->
                    <div class = "logdin">
                        <!-- <strong><a href="../users/userdetails.php"><?php // echo $fname['fname']; ?></a></strong> -->

                        <ul class="nav navbar-nav navbar-right">		
                            <!-- <li class="notifications-menu dropdown">
                                <a href="#"data-toggle="dropdown" class="dropdown-toggle user-action logdin"><i class="fa fa-bell"></i><span>Notifications</span></a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have <?php //echo "no of notifs" ?> notifications</li>
                                    <li><a href="#"> Notf1</a></li>
                                    <li><a href="#"> Notf 2</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"> Last notf</a></li>
                                </ul>
                            
                            </li> -->
            
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle user-action logdin logdin_user"> <strong><?php echo $fname['fname']; ?></strong></a>
                                <ul class="dropdown-menu">
                                    <li><a href="adminprofile.php"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a href="adminsettings.php"><i class="fa fa-sliders"></i> Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../logout.php"><i class="fas fa-sign-out-alt">&nbsp;</i> Logout</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>


            <!--MAIN CONTAINER -->
            <div class= "main_container row">
                <div class="row"> <!--COLUMN 1-->
                     
                    <div class="row"><!--MY GROUPS - row 1 col 1-->
                         <!--WORKSPACE -->
                        <div class="box box-danger boxez" class="col">
                            <div class="box-header with-border">
                            <h3 class="box-title" style="text-align:center;">USERS - STUDENTS</h3>
                            </div><!-- /.box-header -->

<?php
//if(array_key_exists('grp_select', $_POST)) {
    //$selected_grp = $gdata['group_id'];
    //$gmembers = mysqli_query($mysqli, "SELECT * From groups1 WHERE group_id = '$selected_grp'");
//}
       // $nm = $fname['fname'];
       // $groupz_query = "SELECT * From groups_list WHERE created_by = '$nm'";
       // $sql_grpz=mysqli_query($mysqli,$groupz_query);
       // $res_grp = mysqli_fetch_assoc($sql_grpz);
       // $my_gmembers= $res_grp['group_id'];

       // $groupz = mysqli_query($mysqli, "SELECT * From group1 WHERE group_id = '$my_gmembers'");

        //fetch member names instead of id
       // $row3 = mysqli_fetch_array($gmembers);
       // $mbr_nm = $row3['student_id'];
       // $sql_mbr_nm=mysqli_query($mysqli,"SELECT * FROM students WHERE student_id= '$mbr_nm'");
       // $res_mbr_nm = mysqli_fetch_assoc($sql_mbr_nm);
       // $membername = $res_mbr_nm['fname'];
?>

                            <div class="box-body no-padding">
                              
                                    <!--table-->
                                    <div class="table-responsive">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="">
                                                        <script>//JQUERY Table Sort
                                                            $(document).ready(function(){
                                                            $("#works_sach").on("keyup", function() {
                                                                var value = $(this).val().toLowerCase();
                                                                $("#works_search tr").filter(function() {
                                                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                                });
                                                            });
                                                            });
                                                        </script>
                                                        <input id="works_sach" type="text" placeholder="Search..(filter by any column)" style="width: auto;">
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Username</th>
                                                        <th>Reg No</th>
                                                        <th>Email</th>                                              
                            
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody id="works_search">
                                                    <?php
                                                    $count= 1;

                                                    $students = "SELECT * From students";
                                                    $sql_st=mysqli_query($mysqli,$students);

                                                        while ($row = mysqli_fetch_array($sql_st)) {         
                                                    ?>
                                                        <tr>                                              
                                                            
                                                                <?php   
                                                                    echo "<td>". $count++ . "</td>";   //#                                                       
                                                                    echo "<td>" . $row['fname'] . "</td>"; //name                                                               
                                                                    echo "<td>" . $row['username'] . "</td>"; //uname
                                                                    echo "<td>" . $row['regno'] . "</td>"; //regno
                                                                    echo "<td>" . $row['email'] . "</td>"; //email
                                                                    ?>
                                                                
                                                            <td>
                                                                <a href="#" class="edit" data-toggle="modal" onclick="document.getElementById('edit_work_modal').style.display='block'">
                                                                    <i class="fas fa-edit" aria-hidden="true" data-toggle="tooltip" title="Edit" style="color: orange; margin-right:10px;">&nbsp;</i></a>
                                                                <a href="#" class="delete" data-toggle="modal" onclick="document.getElementById('del_modal').style.display='block'">
                                                                    <i class="fas fa-trash" aria-hidden="true" data-toggle="tooltip" title="Delete" style="color: red;">&nbsp;</i></a>
                                                            </td>
                                                                
                                                        </tr>
                                                    <?php                            
                                                         }
                                                     ?>
                         
                                                </tbody>
                                            </table>
                                        </div> <!--table wrapper end -->

                                            <!--EDIT USER MODAL-->
                                            <div id="edit_work_modal" class="modal">
                                                
                                                <form class="modal-content animate" action="lec_ops.php" method="post">
                                                    <div class="imgcontainer">
                                                    <h4 class="modal-title">EDIT WORK</h4>
                                                    <span onclick="document.getElementById('edit_work_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                    </div>

                                                    <div class="container">
                                                        <div class="form-group">
                                                            <label for="active_edit"><b>You are editing:</b></label>
                                                            <input type="text" name="active_edit" style="width: auto;"class="form-control" value="<?php //echo $fname['fname']; ?>" readonly="readonly">
                                                            <br>
                                                            <label for="title"><b>Change Title</b></label>
                                                            <input type="text" placeholder="..." name="title" style="width: 80%;"class="form-control">
                                                            <br>
                                                            <?php //if (isset($gname_error)): ?> <span> <?php //echo $gname_error; ?></span><?php// endif ?>

                                                            <label for="unit"><b>Change Unit</b></label><br><!--link to project id in db...SHOULD BE DROPDOWN-->
                                                            <select name="unit" style="width:auto;">
                                                                <option disabled selected >-- Select Unit --</option>
                                                                <?php   
                                                                    //
                                                                    $ref = $fname['fname'];
                                                                    $lecid = mysqli_query($mysqli, "SELECT lecturer_id From lecturers WHERE fname = '$ref' ");
                                                                    $res_lecid = mysqli_fetch_assoc($lecid);
                                                                    $idlec=$res_lecid['lecturer_id'];

                                                                    $records = mysqli_query($mysqli, "SELECT unit_name From units WHERE lecturer_id = '$idlec'");   

                                                                    while($data = mysqli_fetch_array($records))
                                                                        {
                                                                            echo "<option value='". $data['unit_name'] ."'>" . $data['unit_name'] ."</option>";  // displaying data in option menu
                                                                        }	
                                                                ?>  
                                                            </select>
                                                            <br><br>

                                                            <label for="work_descrip"><b>Alter Description</b></label>
                                                            <textarea class="form-control" name="work_descrip" rows="3" placeholder="Enter the Group/ Project details or instructions..."></textarea>
                                                            <br>
                                                            <label for="duedate"><b>Change Due Date</b></label>
                                                            <input type="date" name="duedate" style="width: auto;"class="form-control">
                                                            <br>
                                                            <label for="lec"><b>Posted by</b></label>
                                                            <input type="text" name="lec" style="width: auto;"class="form-control" value="<?php echo $fname['fname']; ?>" readonly="readonly">
                                                            <br>
                                                        </div>

                                                    </div>

                                                    <div class="container" style="background-color:#f1f1f1">
                                                        <button type="submit" name="edit_work"class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                                        UPDATE RECORDS
                                                        </button>
                                                        <button type="button" onclick="document.getElementById('edit_work_modal').style.display='none'" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                                        CANCEL
                                                        </button>
                                                    </div>
                                                </form>
                                            </div><!--END OF EDIT USER MODAL-->

                                            
                                            <!--DEL USER MODAL-->
                                            <div id="del_modal" class="modal">
                                                
                                                <form class="modal-content animate" action="lec_ops.php" method="post">
                                                    <div class="imgcontainer">
                                                    <h4 class="modal-title">Delete User</h4>
                                                    <span onclick="document.getElementById('del_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                    </div>

                                                    <div class="container">
                                                        <div class="form-group">
                                                            <p>Are you sure you want to delete these Records?</p>
                                                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                            
                                                            <label for="wt"><b>Work Title:</b></label>
                                                            <input type="text" name="wt" style="width: auto;"class="form-control" value="<?php //echo $fname['fname']; ?>" readonly="readonly">
                                                            <br>
                                                        </div>

                                                    </div>

                                                    <div class="container" style="background-color:#f1f1f1">
                                                        <button type="submit" name="delete_work"class="btn btn-danger btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                                        DELETE
                                                        </button>
                                                        <button type="button" onclick="document.getElementById('del_modal').style.display='none'" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                                        CANCEL
                                                        </button>
                                                    </div>
                                                </form>
                                            </div><!--END OF DELETE USER MODAL-->
                                            
                                            <!--ADD USER MODAL-->
                                            <div id="adduser_modal" class="modal">
                                                
                                                <form class="modal-content animate" action="add_user.php" method="post">
                                                    <div class="imgcontainer">
                                                    <h4 class="modal-title">ADD USER</h4>
                                                    <span onclick="document.getElementById('adduser_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                    </div>

                                                    <div class="container">
                                                        <div class="form-group">
                                                            <label for="f_name"><b>Name</b></label>
                                                            <input type="text" name="f_name" style="width: auto;"class="form-control">
                                                            <br>
                                                            <label for="uname"><b>Username</b></label>
                                                            <input type="text" name="uname" style="width: 80%;"class="form-control">
                                                            <br>     
                                                            <label for="mail"><b>Email</b></label>
                                                            <input type="text" name="mail" style="width: 80%;"class="form-control">
                                                            <br>  
                                                            <label for="regno"><b>Regno</b></label>
                                                            <input type="text" name="regno" style="width: 80%;"class="form-control">
                                                            <br>                             
                                                            <label for="passw"><b>Password</b></label>
                                                            <input type="text" name="passw" style="width: auto;"class="form-control">
                                                            <br>
                                                        </div>

                                                    </div>

                                                    <div class="container" style="background-color:#f1f1f1">
                                                        <button type="submit" name="admin_adduser"class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                                        ADD
                                                        </button>
                                                        <button type="button" onclick="document.getElementById('adduser_modal').style.display='none'" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                                        CANCEL
                                                        </button>
                                                    </div>
                                                </form>
                                            </div><!--END OF ADD USER MODAL-->

                                    </div><!--table end-->

                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">    
                                    <button class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;" type="button" data-toggle="modal" onclick="document.getElementById('adduser_modal').style.display='block'">
                                        <i class="fas fa-calendar-plus fa-sm"></i>
                                        &nbsp;Add User
                                    </button>
                            </div><!-- /.box-footer -->
                         </div><!--/.box -->

                     </div>


                </div>  <!--COLUMN 1 END-->
                
                <div class="row"><!--COLUMN 2--->

                    <div class="row"><!--GROUP  MEMBERS - row 2 col 1-->
                        <!-- MEMBERS LIST -->
                            <div class="box box-danger boxez" class="col">
                                <div class="box-header with-border">
                                <h3 class="box-title">Groups</h3>
                                </div><!-- /.box-header -->

<script>//JQUERY Table Sort
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#groupsearch tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

//JQUERY for selekta
$(document).ready(function(){
    $('#selekta').change( function() {
    var value = $(this).val().toLowerCase();
    $("#groupsearch tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});//
</script><br>
<input id="myInput" type="text" placeholder="Search..(filter by any column)">

                                <div class="box-body no-padding">
                                    

                                    <!--table-->
                                    <div class="table-responsive">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <!--unused-->
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <!--<th>
                                                            <span class="custom-checkbox">
                                                                <input type="checkbox" id="selectAll">
                                                                <label for="selectAll"></label>
                                                            </span>
                                                        </th> -->
                                                        <th>#</th>
                                                        <th>Groups</th>
                                                        <th>Description</th>
                                                        <th>Created by</th>
                                                        <th>Date Created</th>
                                                       
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="groupsearch">
                                                    
                                                    <?php
                                                            $count= 1;

                                                            $grps = "SELECT * From groups_list";
                                                            $sql_gr=mysqli_query($mysqli,$grps);

                                                            while ($row = mysqli_fetch_array($sql_gr)) { ?>
                                                        <tr>
                                                        
                                                            <!--<td>
                                                                <span class="custom-checkbox">
                                                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                                    <label for="checkbox1"></label>
                                                                </span>
                                                            </td> -->
                                                            
                                                                <?php  
                                                                    echo "<td>". $count++ . "</td>";   //#                                                                 
                                                                    // echo "<td>" . $row['group_name'] . "</td>"; //backup
                                                                    echo "<td>" . $row['group_name'] . "<input type='hidden' name='grp_name' id='grp_name' value='".$row['group_name']."'>"."</td>";
                                                                    echo "<td>" . $row['group_description'] . "</td>";                                                                
                                                                    echo "<td>" . $row['created_by'] . "</td>";
                                                                    echo "<td>" . $row['created_at'] . "</td>";
                                                                    ?>
                                                                
                                                            <td>
                                                                <center><a href="#" class="edit" id="edit" data-toggle="modal"  onclick="document.getElementById('grade_modal').style.display='block'">
                                                                    <i class="fas fa-edit" aria-hidden="true" data-toggle="tooltip" title="Edit" style="color: orange; margin-right:10px;">&nbsp;</i></a>
                                                                </center>
                                                            </td>
                                                                
                                                        </tr>
                                                    <?php                            
                                                         }
                                                        ?>                                          				
 
                                                </tbody>
                                            </table>
                                            <!--
                                            <div class="clearfix">
                                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                      </div>        
                                      </div>
                                            <!--GRADE WORK MODAL-->
                                            <div id="grade_modal" class="modal">
                                                
                                                <form class="modal-content animate" action="lec_ops.php" method="post">
                                                    <div class="imgcontainer">
                                                    <h4 class="modal-title">Review Submitted Projects</h4>
                                                    <span onclick="document.getElementById('grade_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                    </div>

                                                    <div class="container">
                                                        <div class="form-group">
                                                            <label for="active_edit"><b>You are reviewing group:</b></label>
                                                            <input type="text" name="active_edit" id="active_edit" style="width: auto;"class="form-control" value="<?php //echo $fname['fname']; ?>" readonly="readonly">
                                                            <br>
                                                            <?php 
                                                            //check grade query
                                                                $grade="6";
                                                                $show_grade =mysqli_query($mysqli,"SELECT overall_grade FROM groups_list WHERE group_id = '$grade'");
                                                                $res_shgr = mysqli_fetch_assoc($show_grade);
                                                                $grade_show= $res_shgr['overall_grade']; 
                                                            ?>
                                                            <label for="grade"><b>Grade</b></label>
                                                            <input type="grade" name="projo_grade" style="width: 80%;"class="form-control" value="<?php echo $grade_show; echo " plc hldr"; ?>" readonly="readonly">
                                                            <br>   
                                                            <label for="remarks"><b>Remarks</b></label>
                                                            <textarea class="form-control" name="remarks" rows="3" placeholder="Remarks for the Group/ Project done..."></textarea>
                                                            <br>             
                                                                                                           
                                                            <input type="hidden" name="lec" value="<?php echo $fname['fname']; ?>" >
                                                            <br>
                                                        </div>

                                                    </div>

                                                    <div class="container" style="background-color:#f1f1f1">
                                                        <button type="submit" name="grade_work"class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                                        UPDATE RECORDS
                                                        </button>
                                                        <button type="button" onclick="document.getElementById('grade_modal').style.display='none'" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                                        CANCEL
                                                        </button>
                                                    </div>
                                                </form>
                                            </div><!--END OF GRADE WORK MODAL-->
              
                                     </div><!--table end-->
                                   

                                </div><!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <br>                                    
                              </div><!-- /.box-footer -->
                            </div><!--/.box -->
                    </div><!--group member details row-->
            
                </div><!--COLUMN 2--->
                
            </div><!--main container-->
        </div><!--content-->

       
        <script src="./js/draggable.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });

            //modal 1: Add work
            var modal = document.getElementById('id01');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                //modal 2: delete work
            var modal = document.getElementById('del_modal');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                //modal 3: editwork
            var modal = document.getElementById('edit_work_modal');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                //modal 4: Grade work
            var modal = document.getElementById('grade_modal');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                //modal 5: Add user
            var modal = document.getElementById('adduser_modal');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                //pass row data to modal
                $("#edit").click(function () { //#edit refers to edit button
                    var gname = $("#grp_name").val();//grpname is input value of data to pass to modal box
                    $("#active_edit").html(gname); //actv_edit refers to box in modal
                });
                
                
                //groups table sortment
                $(document).ready(function(){
                    $(".btn-group .btn").click(function(){
                        var inputValue = $(this).find("input").val();
                        if(inputValue != 'all'){
                            var target = $('table tr[data-status="' + inputValue + '"]');
                            $("table tbody tr").not(target).hide();
                            target.fadeIn();
                        } else {
                            $("table tbody tr").fadeIn();
                        }
                    });

                    //files upload listing
                    updatefileList = function() {
                        var fileinput = document.getElementById('file');
                        var fileoutput = document.getElementById('fileList');
                        var children = "";
                        for (var i = 0; i < fileinput.files.length; ++i) {
                            children += '<li>' + fileinput.files.item(i).name + '</li>';
                        }
                        fileoutput.innerHTML = '<ul>'+children+'</ul>';
                    }



                    // Changing the class of status label to support Bootstrap 4
                    var bs = $.fn.tooltip.Constructor.VERSION;
                    var str = bs.split(".");
                    if(str[0] == 4){
                        $(".label").each(function(){
                            var classStr = $(this).attr("class");
                            var newClassStr = classStr.replace(/label/g, "badge");
                            $(this).removeAttr("class").addClass(newClassStr);
                        });
                    }
                });

        </script>
        <script>//members script
                $(document).ready(function(){
                    // Activate tooltip
                    $('[data-toggle="tooltip"]').tooltip();
                    
                    // Select/Deselect checkboxes
                    var checkbox = $('table tbody input[type="checkbox"]');
                    $("#selectAll").click(function(){
                        if(this.checked){
                            checkbox.each(function(){
                                this.checked = true;                        
                            });
                        } else{
                            checkbox.each(function(){
                                this.checked = false;                        
                            });
                        } 
                    });
                    checkbox.click(function(){
                        if(!this.checked){
                            $("#selectAll").prop("checked", false);
                        }
                    });
                });
            </script>
            <!--ADD MEMBER AJAX-->
            <script>
                $(document).ready(function(){
                        $('.search-box input[type="text"]').on("keyup input", function(){
                            /* Get input value on change */
                            var inputVal = $(this).val();
                            var resultDropdown = $(this).siblings(".result");
                            if(inputVal.length){
                                $.get("add_mbr_ajax.php", {term: inputVal}).done(function(data){
                                    // Display the returned data in browser
                                    resultDropdown.html(data);
                                });
                            } else{
                                resultDropdown.empty();
                            }
                        });
                        
                        // Set search input value on click of result item
                        $(document).on("click", ".result p", function(){
                            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                            $(this).parent(".result").empty();
                        });
                    });
            </script>
</body>

</html>

</html>
<?php
//if(array_key_exists('grp_select', $_POST)) {
    //$selected_grp = $gdata['group_id'];
    //$gmembers = mysqli_query($mysqli, "SELECT * From groups1 WHERE group_id = '$selected_grp'");
//}
//convert lecname to lecid
/*
$lecturer = $fname['fname'];
$lec_sql = "SELECT * FROM lecturers WHERE fname = '$lecturer'"; 
$sql_lec=mysqli_query($mysqli,$lec_sql);
$res_lec = mysqli_fetch_assoc($sql_lec);
$lectid= $res_lec['lecturer_id'];

        //query to match lec_id - proj_id (lidpid) and proj_id - group_id (pidgid)      
        $sql_lid_pid=mysqli_query($mysqli,"SELECT * From unit_project WHERE lecturer_id = '$lectid'");
        $res_lidpid = mysqli_fetch_assoc($sql_lid_pid);
        $lid_pid= $res_lidpid['project_id'];

        $groups_lec = mysqli_query($mysqli, "SELECT * From groups_list WHERE project_id = '$lid_pid'");
*/
        //fetch member names instead of id
        //$row3 = mysqli_fetch_array($groups_lec);
       // $mbr_nm = $row3['student_id'];
        //$sql_mbr_nm=mysqli_query($mysqli,"SELECT * FROM students WHERE student_id= '$mbr_nm'");
       // $res_mbr_nm = mysqli_fetch_assoc($sql_mbr_nm);
       // $membername = $res_mbr_nm['fname'];
?>