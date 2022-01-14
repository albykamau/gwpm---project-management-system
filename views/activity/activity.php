<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include('../session.php');
   //include('crt_grp.php')
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Activity</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../../public/scripts/jquery-3.6.0.min.js" ></script><!-- LOCAL-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/bootstrap-5.1.3-dist/css/bootstrap.min.css" ><!-- LOCAL-->
    
    <link rel="stylesheet" href="./css/shortened.css"> <!-- CHECK & SHORTEN CSS!-->
    <link rel="stylesheet" href="./css/chatbox.css"> <!-- Css for chatboxes-->

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

    <link rel="stylesheet" href="tabs_css.css" ><!-- LOCAL-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.jss" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" ></script>
    

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

                <li>
                    <a href="../groups/groups.php"> <i class="fas fa-users" aria-hidden="true"></i>&nbsp; Groups</a>
                </li>

                <!--<li>
                    <a href="../boards/kanbabn.php"> <i class="fas fa-clipboard" aria-hidden="true"></i>&nbsp; Kanban</a>
                </li> -->

                <li class="active">
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
                    <div class="container" id="activity">
                     
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
                            <li><a data-toggle="tab" href="#menu1">Tasks</a></li>
                            <li><a data-toggle="tab" href="#menu2">Timeline</a></li>
                            <li><a data-toggle="tab" href="#menu3">Progress Report </a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active"> <!--overview-->
                                    <h4>Summarized analysis of group activity</h4>
                                    <div class="box box-danger boxez" class="col">
                                    <div class="box-header with-border">
                                    <h3 class="box-title" style="text-align:center;"></h3>
                                    </div><!-- /.box-header -->
                                    <form method="POST">
                                            <div class=""><!--ROW!: select group to chat in-->
                                                <select name="group_disp" style="width:auto;">
                                                        <option disabled selected >-- Select Group --</option>
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
                                                    SELECT</button>
                                            </div>
                                        </form><!--group select to chat in -->
                                        <br>
                                    <div class="box-body no-padding">
                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-center">    
                                        
                                    </div><!-- /.box-footer -->
                                    </div><!--/.box -->
                            </div><!--/overview-->

                            <div id="menu1" class="tab-pane fade"><!--Tasks-->
                                <h3>Pending Tasks</h3>
                                    <div class= "main_container row">
                                        <div class="col"> <!--COLUMN 1-->
                                            
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
                                                        <th>Group</th>
                                                        <th>Title</th>
                                                        <!-- <th>Description</th> -->
                                                        <th>Date&nbsp;Posted</th>
                                                        <th>Deadline</th>                                              
                                                        <th>Detailed description</th>
                                                        <th>File(s)</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody id="works_search">
                                                    <?php
                                                    $count= 1;

                                                    //convert session name to stuid
                                                    $mbr_name = $fname ['fname'];
                                                    $mbr_sql = "SELECT * FROM students WHERE fname = '$mbr_name'"; 
                                                    $sql_mbr=mysqli_query($mysqli,$mbr_sql);
                                                    $res_mbr = mysqli_fetch_assoc($sql_mbr);
                                                    $stu_id= $res_mbr['student_id'];


                                                    //convert group id to group name

                                                    
                                                    $group_works = "SELECT * From project_tasks WHERE student_id = '$stu_id'";
                                                    $sql_wax=mysqli_query($mysqli,$group_works);

                                                        while ($row = mysqli_fetch_array($sql_wax)) {         
                                                    ?>
                                                        <tr>                                              
                                                            
                                                                <?php   
                                                                    echo "<td>". $count++ . "</td>";   //#                                                       
                                                                    echo "<td>" . $row['group_id'] . "</td>"; //group                                                               
                                                                    echo "<td>" . $row['task_name'] . "</td>"; //task title
                                                                    echo "<td>" . $row['date_created'] . "</td>"; //dte posted
                                                                    echo "<td>" . $row['deadline'] . "</td>"; //due date
                                                                    echo "<td>" . $row['task_description'] . "</td>"; //descrip
                                                                    echo "<td>" . $row['statuss'] . "</td>"; //uploadeed files
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

                                            <!--EDIT WORK MODAL-->
                                            <div id="edit_work_modal" class="modal">
                                                
                                                <form class="modal-content animate" action="task_ops.php" method="post">
                                                    <div class="imgcontainer">
                                                    <h4 class="modal-title">EDIT TASK</h4>
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
                                            </div><!--END OF EDIT WORK MODAL-->

                                            
                                            <!--DEL WORK MODAL-->
                                            <div id="del_modal" class="modal">
                                                
                                                <form class="modal-content animate" action="task_ops.php" method="post">
                                                    <div class="imgcontainer">
                                                    <h4 class="modal-title">Delete Task</h4>
                                                    <span onclick="document.getElementById('del_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                    </div>

                                                    <div class="container">
                                                        <div class="form-group">
                                                            <p>Are you sure you want to delete these Records?</p>
                                                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                            
                                                            <label for="wt"><b>Task Title:</b></label>
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
                                            </div><!--END OF DELETE WORK MODAL-->
                                            
                                    </div><!--table end-->

                                        </div>  <!--COLUMN 1 END-->
                              
                                        <div class="col"><!--COLUMN 2--->
                                         
                                        </div><!--COLUMN 2--->
                                        
                                    </div><!--main container-->
                            </div> <!--/Tasks-->

                            <div id="menu2" class="tab-pane fade">
                            <h3>Timeline</h3><!--Timeline-->
                            
                            </div><!--/Timeline-->

                            <div id="menu3" class="tab-pane fade">
                            <h3>Progress Report</h3><!--Progress report-->
                            
                            </div><!--/Progress report-->
                        </div>
                    </div>

                <div class="row"> <!--COLUMN 1x-->                   
                     <div class="row"><!--GROUP CHAT- row 1 col 1-->
                         <!--WORKSPACE -->
                        

                     </div>
                </div>  <!--COLUMN 1x END-->
                 
                
            </div><!--main container-->
        </div><!--content-->

<?php

$nm = $fname['fname'];
$mbrs_query = "SELECT * From groups_list WHERE created_by = '$nm'";
$sql_grp=mysqli_query($mysqli,$mbrs_query);
$res_grp = mysqli_fetch_assoc($sql_grp);
$my_gmembers= $res_grp['group_id'];

$gmembers = mysqli_query($mysqli, "SELECT * From group1 WHERE group_id = '$my_gmembers'");

//fetch member names instead of id
$row3 = mysqli_fetch_array($gmembers);

?>
       
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

            /*
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
                */
                
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
            <script>
                function show_func(){

                var element = document.getElementById("chathist");
                    element.scrollTop = element.scrollHeight;

                }
            </script>
</body>

</html>

</html>
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