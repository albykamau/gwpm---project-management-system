<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include('../session.php');
   //include('crt_grp.php')
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Groups</title>

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


    <script type="text/javascript" src="usersearch_ajax.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="overflow: auto">
            <div class="sidebar-header">
                <strong style="align:center; ">Group Projects Management System</strong>
            </div>
            
           

            <ul class="list-unstyled components">
                <!-- Order: dashb, groups (dropdown), kanban, user activity (report), tasks, to do, chats, feedback, logout   -->
                <li>
                    <a href="../boards/dashboard.php"><i class="fas fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
                </li>

                <li class="active">
                    <a href="../groups/groups.php"> <i class="fas fa-users" aria-hidden="true"></i>&nbsp; Groups</a>
                </li>

                <!--<li>
                    <a href="../boards/kanbabn.php"> <i class="fas fa-clipboard" aria-hidden="true"></i>&nbsp; Kanban</a>
                </li> -->

                <li>
                    <a href="../activity/activity.php"><i class="fas fa-chart-pie" aria-hidden="true"></i> &nbsp; User Activity</a>
                </li>

                <li>
                    <a href="../tasks/tasks.php"> <i class="fas fa-tasks" aria-hidden="true"></i>&nbsp; Tasks</a>
                </li>

                <li>
                    <a href="../chats/chat.php"> <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; &nbsp; Chats</a>
                </li>

                <li>
                    <a href="../settings/settings.php"> <i class="fas fa-cogs" aria-hidden="true"></i> &nbsp;&nbsp; Settings</a>
                </li>

                <li>
                    <a href="../users/userdetails.php"> <i class="fas fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp; My Profile</a>
                </li>

                <li>
                    <a href="../logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> &nbsp;&nbsp; Logout </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../feedback/feedback.php" class="download">Feedback</a>
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
                        

                        <!--CREATE GROUP MODAL-->
                         <div id="id01" class="modal">
                            
                            <form class="modal-content animate" action="crt_grp.php" method="post">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <div class="form-group">
                                        <label for="gname"><b>Group/ Project Name</b></label>
                                        <input type="text" placeholder="..." name="gname" style="width: 80%;"class="form-control" required>
                                        <br>
                                        <?php //if (isset($gname_error)): ?> <span> <?php //echo $gname_error; ?></span><?php// endif ?>

                                        <label for="unit"><b>Unit</b></label><br><!--link to project id in db...SHOULD BE DROPDOWN-->
                                        <select name="unit" style="width:auto;">
                                            <option disabled selected >-- Select Unit --</option>
                                            <?php   
                                                $records = mysqli_query($mysqli, "SELECT project_name From unit_project");  // Use select query here 

                                                while($data = mysqli_fetch_array($records))
                                                {
                                                    echo "<option value='". $data['project_name'] ."'>" . $data['project_name'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?>  
                                        </select>
                                        <br><br>

                                        <label for="grp_descrp"><b>Description</b></label>
                                        <textarea class="form-control" name="grp_descrp" rows="3" placeholder="Enter the Group/ Project details or instructions..."></textarea>
                                        <br>
                                        <label for="gcreator"><b>Group Creator</b></label>
                                        <input type="text" name="gcreator" style="width: auto;"class="form-control" value="<?php echo $fname['fname']; ?>" readonly="readonly">
                                        <br>
                                    </div>

                                </div>

                                <div class="container" style="background-color:#f1f1f1">
                                    <button type="submit" name="formgroop"class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                    CREATE
                                    </button>
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                    CANCEL
                                    </button>
                                </div>
                            </form>
                        </div><!--END OF CREATE GROUP MODAL-->

                        <!--ADD MEMBER MODAL-->
                        <div id="id02" class="modal">
                            
                            <form class="modal-content animate" action="add_mbr.php" method="post">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <div class="form-group">
                                        <label for="mbr_name"><b>NAME</b></label> <br><!--AJAX-->
                                        <!-- <div class="add-mbr">
                                            <input type="text" placeholder="" autocomplete="off" name="mbr_name" style="width: 80%;" required>
                                            <div class="result"></div>
                                        </div> -->
                                        <div id="search-box">
                                            <input type="text" autocomplete="off" placeholder="Search names..." name="mbr_name" required />
                                            <div id="result"></div>
                                        </div>
                                        <br>

                                        <label for="role"><b>Role</b></label><br><!--link to project id in db...SHOULD BE DROPDOWN-->
                                        <select name="role" style="width:auto;">
                                            <option disabled selected >-- Set Role --</option>
                                            <option >Assistant GL</option>
                                            <option >Member</option>
                                        </select>
                                        <br> 
                                    </div>
                                    <label for="group"><b>Group:</b></label><br>
                                         <select name="group" style="width:auto;">
                                            <option disabled selected >-- Select group to add to--</option>
                                             <?php   
                                                $nm = $fname['fname'];
                                                $group = mysqli_query($mysqli, "SELECT group_name From groups_list WHERE created_by = '$nm'");  
            
                                                while($gdata = mysqli_fetch_array($group))
                                                    {
                                                        echo "<option value='". $gdata['group_name'] ."'>" . $gdata['group_name'] ."</option>";  
                                                    }	
                                            ?>  
                                        </select>
                                        <br><br>


                                </div>

                                <div class="container" style="background-color:#f1f1f1">
                                    <button type="submit" name="add_member"class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                    ADD
                                    </button>
                                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                    CANCEL
                                    </button>
                                </div>
                            </form>
                        </div><!--END OF ADD MEMBER MODAL-->

                    </div>

                     <!-- Logged in user  -->
                    <div class = "logdin">
                        <!-- <strong><a href="../users/userdetails.php"><?php // echo $fname['fname']; ?></a></strong> -->

                        <ul class="nav navbar-nav navbar-right">		
                            <li class="notifications-menu dropdown">
                                <a href="#"data-toggle="dropdown" class="dropdown-toggle user-action logdin"><i class="fa fa-bell"></i><span>Notifications</span></a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have <?php //echo "no of notifs" ?> notifications</li>
                                    <li><a href="#"> Notf1</a></li>
                                    <li><a href="#"> Notf 2</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"> Last notf</a></li>
                                </ul>
                            
                            </li>
            
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle user-action logdin logdin_user"> <strong><?php echo $fname['fname']; ?></strong></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../users/userdetails.php"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a href="../settings/settings.php"><i class="fa fa-sliders"></i> Settings</a></li>
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
                            <h3 class="box-title" style="text-align:center;">MY GROUPS/ PROJECTS</h3>
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
                                                            $("#grp_sach").on("keyup", function() {
                                                                var value = $(this).val().toLowerCase();
                                                                $("#groups_search tr").filter(function() {
                                                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                                });
                                                            });
                                                            });
                                                        </script>
                                                        <input id="grp_sach" type="text" placeholder="Search..(filter by any column)" style="width: auto;">                                    
                                                    </div><!--JQUERY DIV-->

                                                    <div class="col-sm-6">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <!-- <th>Description</th> -->
                                                        <th>Created&nbsp;by</th>
                                                        <th>Created&nbsp;at</th>
                                                        <th>Status</th>
                                                        <th>Grade</th>
                                                        <th>Lec's Feedback</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="groups_search">
                                                    <?php
                                                    $count= 1;
                                                    
                                                    $nm = $fname['fname'];
                                                    $groupz_query = "SELECT * From groups_list WHERE created_by = '$nm'";
                                                    $sql_grpz=mysqli_query($mysqli,$groupz_query);

                                                        while ($row = mysqli_fetch_array($sql_grpz)) {         
                                                    ?>
                                                        <tr>                                              
                                                            
                                                                <?php   
                                                                    echo "<td>". $count++ . "</td>";   //#                                                       
                                                                    echo "<td>" . $row['group_name'] . "</td>"; //name
                                                                   // echo "<td>" . $row['member_role'] . "</td>"; //descrip                                                                
                                                                    echo "<td>" . $row['created_by'] . "</td>"; //creator
                                                                    echo "<td>" . $row['created_at'] . "</td>"; //created at
                                                                    echo "<td>" . $row['submission_status'] . "</td>"; //status
                                                                    echo "<td>" . $row['overall_grade'] . "</td>"; //grade
                                                                    echo "<td>" . $row['group_remarks'] . "</td>"; //lec feedback
                                                                    ?>
                                                                
                                                            <td>
                                                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" aria-hidden="true" data-toggle="tooltip" title="Edit" style="color: orange; margin-right:10px;">&nbsp;</i></a>
                                                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash" aria-hidden="true" data-toggle="tooltip" title="Delete" style="color: red;">&nbsp;</i></a>
                                                            </td>
                                                                
                                                        </tr>
                                                    <?php                            
                                                         }
                                                     ?>
                                                    <!--
                                                    <tr data-status="active">
                                                        <td>#</td>
                                                        <td><a href="#">static</a></td>
                                                        <td>field test</td>
                                                        <td><a href="#" class="btn btn-sm manage">View</a></td>
                                                        <td>Submitted</td>
                                                        <td>A+</td>
                                                        <td>feedback</td>
                                                        <td>
                                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" aria-hidden="true" data-toggle="tooltip" title="Edit" style="color: orange; margin-right:10px;">&nbsp;</i></a>
                                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash" aria-hidden="true" data-toggle="tooltip" title="Delete" style="color: red;">&nbsp;</i></a>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div> 
                                    </div>   
                                    <!--table end-->

                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">    
                                    <button class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;" type="button" data-toggle="modal" onclick="document.getElementById('id01').style.display='block'">
                                        <i class="fas fa-calendar-plus fa-sm"></i>
                                        &nbsp;New Group/ Project 
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
                                <h3 class="box-title" style="text-align:center;">GROUP MEMBERS</h3>
                                </div><!-- /.box-header -->

                                <form method="POST">
                                    <div class=""><!--ROW!: select group to display on member table-->
                                        <select name="group_disp" style="width:auto;">
                                                <option disabled selected >-- Select Group to Display --</option>
                                                    <?php   
                                                        $nm = $fname['fname'];
                                                        $group = mysqli_query($mysqli, "SELECT group_name From groups_list WHERE created_by = '$nm'");  

                                                        while($gdata = mysqli_fetch_array($group))
                                                            {
                                                                echo "<option value='". $gdata['group_name'] ."'>" . $gdata['group_name'] ."</option>";  
                                                            }	
                                                    ?>  
                                        </select>
                                        <button type="submit" name="grp_select" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #47748b; color: white;">
                                            Show</button>
                                    </div>
                                </form><!--group select to display on member table-->

<?php
//if(array_key_exists('grp_select', $_POST)) {
    //$selected_grp = $gdata['group_id'];
    //$gmembers = mysqli_query($mysqli, "SELECT * From groups1 WHERE group_id = '$selected_grp'");
//}
        $nm = $fname['fname'];
        $mbrs_query = "SELECT * From groups_list WHERE created_by = '$nm'";
        $sql_grp=mysqli_query($mysqli,$mbrs_query);
        $res_grp = mysqli_fetch_assoc($sql_grp);
        $my_gmembers= $res_grp['group_id'];

        $gmembers = mysqli_query($mysqli, "SELECT * From group1 WHERE group_id = '$my_gmembers'");

        //fetch member names instead of id
        $row3 = mysqli_fetch_array($gmembers);
        
?>

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
                                                       <!-- <th>
                                                            <span class="custom-checkbox">
                                                                <input type="checkbox" id="selectAll">
                                                                <label for="selectAll"></label>
                                                            </span>
                                                        </th> -->
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Role</th>
                                                        <th>Date added</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
                                                        $count2=1;
                                                            while ($row = mysqli_fetch_array($gmembers)) { 
                                                                //convert stu id to name
                                                                $mbr_nm = $row['student_id'];
                                                                $sql_mbr_nm=mysqli_query($mysqli,"SELECT * FROM students WHERE student_id= '$mbr_nm'");
                                                                $res_mbr_nm = mysqli_fetch_assoc($sql_mbr_nm);
                                                                $membername = $res_mbr_nm['fname'];    
                                                            ?>
                                                        <tr>
                                                        
                                                            <!--<td>
                                                                <span class="custom-checkbox">
                                                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                                    <label for="checkbox1"></label>
                                                                </span>
                                                            </td>-->
                                                            
                                                                <?php 
                                                                    echo "<td>". $count2++ . "</td>";   //#                                                               
                                                                    echo "<td>" . $membername . "</td>"; //change to name
                                                                    echo "<td>" . $row['member_role'] . "</td>";                                                                
                                                                    echo "<td>" . $row['date_added'] . "</td>";
                                                                    ?>
                                                                
                                                            <td>
                                                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fas fa-edit" aria-hidden="true" data-toggle="tooltip" title="Edit" style="color: orange; margin-right:10px;">&nbsp;</i></a>
                                                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash" aria-hidden="true" data-toggle="tooltip" title="Delete" style="color: red;">&nbsp;</i></a>
                                                            </td>
                                                                
                                                        </tr>
                                                    <?php                            
                                                         }
                                                        ?>

                                                  <!--
                                                    <tr>
                                                        <td>
                                                            <span class="custom-checkbox">
                                                                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                                                <label for="checkbox3"></label>
                                                            </span>
                                                        </td>
                                                        <td>static</td>
                                                        <td>test </td>
                                                        <td>field</td>
                                                        <td>
                                                            <a href="#odal" class="edit" data-toggle="modal"><i class="fas fa-edit" aria-hidden="true" data-toggle="tooltip" title="Edit" style="color: orange; margin-right:10px;">&nbsp;</i></a>
                                                            <a href="#odal" class="delete" data-toggle="modal"><i class="fas fa-trash" aria-hidden="true" data-toggle="tooltip" title="Delete" style="color: red;">&nbsp;</i></a>
                                                        </td>
                                                    </tr>	-->				
 
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
                                        </div><!--wrapper-->
                                    </div> <!--table responsive end-->       
                                   

                                    <!-- Edit Modal HTML -->
                                
                                    <!-- Delete Modal HTML -->
                                    
                                        
                                    

                                </div><!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <br>
                                    <a href="#" onclick="document.getElementById('id02').style.display='block'"><i class="fas fa-user-plus" aria-hidden="true" style="color:green;"></i> 
                                    &nbsp;&nbsp;Add Member</a>
                                    <!--to add member: should be button, modal popup, ajax add, refresh page and requery db to update list  
                                        or display invite link instead -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- <a href="#del_mbr_Modal" data-toggle="modal"><i class="fas fa-trash" aria-hidden="true" style="color:red;"></i>
                                    &nbsp;&nbsp;Delete selected</a> !-- delete selected gmember confirmation -->						
                           
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

            //modal 1: Crt group
            var modal = document.getElementById('id01');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                //modal 2: Add member 
                var modal = document.getElementById('id02');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }   
                
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

            <!--ADD MEMBER AJAX script-->
            <script>
                $(document).ready(function(){
                        $('.search input[type="text"]').on("keyup input", function(){
                            /* Get input value on change */
                            var inputVal = $(this).val();
                            var resultDropdown = $(this).siblings(".reslt");
                            if(inputVal.length){
                                $.get("/add_mbr_ajax.php", {term: inputVal}).done(function(data){
                                    // Display the returned data in browser
                                    resultDropdown.html(data);
                                });
                            } else{
                                resultDropdown.empty();
                            }
                        });
                        
                        // Set search input value on click of result item
                        $(document).on("click", ".reslt p", function(){
                            $(this).parents(".search").find('input[type="text"]').val($(this).text());
                            $(this).parent(".reslt").empty();
                        });
                    });
            </script>
</body>

</html>

</html>