<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include('../session.php');
   //include('crt_grp.php')
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student's Dashboard</title>

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
                <strong style="align:center; ">Group Projects Management System</strong>
            </div>
            
           

            <ul class="list-unstyled components">
                <!-- Order: dashb, groups (dropdown), kanban, user activity (report), tasks, to do, chats, feedback, logout   -->
                <li class="active">
                    <a href="../boards/dashboard.php"><i class="fas fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
                </li>

                <li>
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
                        <button class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;" type="button" data-toggle="modal" onclick="document.getElementById('id01').style.display='block'">
                            <i class="fas fa-calendar-plus fa-sm"></i>
                            &nbsp;New Group/ Project 
                        </button>

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
                        </div><!--END OF MODAL-->

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

                <div class="row"><!--ROW!: select group to display-->
                <div class="col"><!--select col-->
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
                </div><!--select col-->
                   
                </div><!--group select to display on dashboard-->

            <!--MAIN CONTAINER -->
            <div class= "main_container row">
                <div class="col-8"> <!--COLUMN 1-->
                     
                    <div class="row"><!--WORKSPACE - row 1 col 1-->
                         <!--WORKSPACE -->
                        <div class="box box-danger boxez" class="col">
                            <div class="box-header with-border">
                            <h3 class="box-title" style="text-align:center;">WORK SPACE</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                              
                                    <div class="row container-fluid"> 
                                        <div class="col"> <!--RESOURCES-->
                                            <P><b>PROJECT DESCRIPTION:</b></p>
                                            <div class="boxez">
                                                <?php
                                                if(isset($_POST['grp_select'])){
                                                $nm = $fname['fname'];
                                                $gdat = $gdata['group_name'];
                                                $groupd = mysqli_query($mysqli, "SELECT * From groups_list WHERE group_name = '$gdat'");  
            
                                                $gdater = mysqli_fetch_array($groupd);
                                        }
                                                ?> 
                                                <p><?php echo $gdater['group_description']; ?> </p>
                                            </div>
                                         </div>
                                        <div class="col text-center"> <!--RESOURCES-->
                                            <P><b>RESOURCES:</b></p>
                                            <div class="boxez float-right">
                                                <a href="#"><i class="fas fa-plus" aria-hidden="true"></i> &nbsp;&nbsp;Add Resource</a>
                                                   
                                            </div>
                                     </div>
                                     </div>

                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">
                                <form class="" action="comment.php" method="POST">
                                    <label for="grp_descrp"><b>Remarks/Comments</b></label>
                                    <textarea class="form-control" name="grp_descrp" rows="3" placeholder="..." style="margin-bottom:5px;"></textarea>
                                    
                                    <button type="submit" name="add_comment" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:left">
                                    POST</button>
                                </form>
                            </div><!-- /.box-footer -->
                         </div><!--/.box -->

                     </div>

                
                    <div class="row"><!--GROUP  MEMBERS & DETAILS - row 2 col 1-->
                     <!-- MEMBERS LIST -->
                        <div class="box box-danger boxez" class="col">
                            <div class="box-header with-border">
                            <h3 class="box-title">Group Members</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <li>
                                <a class="users-list-name" href="#"><?php echo $fname['fname']; ?></a>
                                </li>
                                <li>
                                <a class="users-list-name" href="#">Norman</a>
                                </li>
                                <li>
                                <a class="users-list-name" href="#">Jane</a>
                                </li>
                                <li>
                                <a class="users-list-name" href="#">John</a>
                                </li>
                            </ul><!-- /.users-list -->
                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">
                            <a href="../groups/groups.php"><i class="fas fa-user-plus" aria-hidden="true"></i> &nbsp;&nbsp;Manage</a>
                            <!--to add member: should be button, modal popup, ajax add, refresh page and requery db to update list  
                                or display invite link instead
                             -->
                            </div><!-- /.box-footer -->
                         </div><!--/.box -->


                            <!-- GROUP DETAILS -->
                            <div class="box box-danger boxez" class="col">
                                <div class="box-header with-border">
                                <h3 class="box-title">Group Details</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    <li>
                                    <a class="users-list-name" href="#">Project Name</a>
                                    </li>
                                    <li>
                                    <a class="users-list-name" href="#">Date Created:</a>
                                    </li>
                                    <li>
                                    <a class="users-list-name" href="#">Creator:</a>
                                    </li>
                                </ul><!-- /.users-list -->
                                </div><!-- /.box-body -->
                            </div><!--/.box -->
                   
                     </div><!--group/member details row-->

                </div>  <!--COLUMN 1-->
                
                <div class="col-4"><!--COLUMN 2--->

                        <div class="row "><!--TASK DETAILS COLUMN-->
                                <!-- TASK DETAILS -->
                                     <div class="box box-danger boxez" class="col">
                                        <div class="box-header with-border">
                                        <h3 class="box-title">Project Details</h3>
                                        </div><!-- /.box-header -->
                                        <div class="box-body no-padding">
                                            <p>Deadline: </p><span><?php //echo $projectdeadline ?></span>
                                            <p>Status: </p><span><?php //echo $projectstatus ?></span>
                                            <p><u>Completed tasks: </u></p>
                                            <ul class="users-list clearfix">
                                                <li>
                                                <a class="users-list-name" href="#"><?php //echo $task; ?></a>
                                                </li>
                                                <li>
                                                <a class="users-list-name" href="#">Task 2</a>
                                                </li>
                                                <li>
                                                <a class="users-list-name" href="#">Task 3</a>
                                                </li>
                                            </ul><!-- /.users-list --> 
                                            <hr>
                                            <label>Progress: </label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="">20%</span>
                                                </div>
                                            </div>       
                                            <!-- select --><br><hr>
                                                <div class="form-group" style="width:70%;"><form>
                                                    <label>Priority</label>
                                                    <select class="form-control">
                                                        <option>Low</option>
                                                        <option>Medium</option>
                                                        <option>High</option>
                                                        <option>Critical</option>
                                                    </select>
                                                    <button type="submit" name="add_comment" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; margin-top: 5px;  float:left">
                                                    UPDATE</button></form>
                                                </div><br>

                                        </div><!-- /.box-body -->
                                        <div class="box-footer text-center">
                                            <hr>
                                            <button type="submit" name="add_comment" class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white; float:right">
                                            SUBMIT WORK</button>
                                         </div><!-- /.box-footer -->
                                    </div><!--/.box -->
                         </div> 
            
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

            var modal = document.getElementById('id01');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                
        </script>
        
</body>

</html>

</html>