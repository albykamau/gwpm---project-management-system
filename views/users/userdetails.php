<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include('../session.php');
   //include('crt_grp.php')
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile</title>

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


    <script type="text/javascript" src="usersearch_ajax.js"></script>

</head>

<body onload="show_func()">
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

                <li >
                    <a href="../groups/groups.php"> <i class="fas fa-users" aria-hidden="true"></i>&nbsp; Groups</a>
                </li>

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

                <li class="active">
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
                <div class="col"> <!--COLUMN 1-->
                     
                <form action="userdetails.php" method="post">                       
                                <div class="container">                                                     
                                    <h2>Edit your details</h2>
                                    <div class="form-group">
                                        <label for="new_fname"><b>Name</b></label>
                                        <input type="text"  name="new_fname" style="width: 80%;"class="form-control" required>
                                        <br>
                                        <label for="new_uname"><b>Username</b></label>
                                        <input type="text" name="new_uname" style="width: 80%;"class="form-control" required>
                                        <label for="new_regno"><b>Registration Number</b></label>
                                        <input type="text" name="new_regno" style="width: 80%;"class="form-control" required>
                                        <label for="new_mail"><b>Email</b></label>
                                        <input type="text" name="new_mail" style="width: 80%;"class="form-control" required>
                                        <br>
                                    </div>
                                </div>
                                <div class="container" style="background-color:#f1f1f1">
                                    <button type="submit" name="edit_details"class="btn btn-dark btn-sm d-sm-inline-block" style="background-color: #0a192f; color: white;">
                                    EDIT
                                    </button>
                                </div>
                            </form>

                </div>  <!--COLUMN 1 END-->

                <!--get current details-->
                <?php
                $ref = $fname['fname'];
                 $get_records = "SELECT * From students WHERE fname = '$ref'"; 
                 $curr_records=mysqli_query($mysqli,$get_records);
                 $current = mysqli_fetch_array($curr_records);
                ?>

                <div class="col"><!--COLUMN 2--->
                <form action="userdetails.php" method="post">                       
                                <div class="container">                                                     
                                    <h2>Current details</h2>
                                    <div class="form-group">                       
                                        <label for="curr_name"><b>Name</b></label>
                                        <input type="text" name="curr_name" style="width: auto;"class="form-control" value="<?php echo $fname['fname']; ?>" readonly="readonly">
                                        <br>
                                        <label for="curr_username"><b>Username</b></label>
                                        <input type="text" name="curr_username" style="width: 80%;"class="form-control" value="<?php echo $current['username'];?>" readonly="readonly">
                                        <label for="curr_regno"><b>Registration Number</b></label>
                                        <input type="text" name="curr_regno" style="width: 80%;"class="form-control" value="<?php echo $current['regno'];?>" readonly="readonly">
                                        <label for="curr_mail"><b>Email</b></label>
                                        <input type="text" name="curr_mail" style="width: 80%;"class="form-control" value="<?php echo $current['email'];?>" readonly="readonly">
                                        <br>
                                    </div>
                                </div>
                                
                            </form>
                </div><!--COLUMN 2--->
                
            </div><!--main container-->
        </div><!--content-->

<!--update records-->
<?php
//convert studname to studid
$stud = $fname['fname'];
$sql_stu=mysqli_query($mysqli,"SELECT * FROM students WHERE fname = '$stud'");
$res_stu = mysqli_fetch_assoc($sql_stu);
$stuid= $res_stu['student_id'];

if(isset($_POST['edit_details'])){
        $new_fname = mysqli_real_escape_string($mysqli,$_POST['new_fname']);
        $new_uname = mysqli_real_escape_string($mysqli,$_POST['new_uname']); 
        $new_regno = mysqli_real_escape_string($mysqli,$_POST['new_regno']); 
        $new_mail = mysqli_real_escape_string($mysqli,$_POST['new_mail']); 
        
        
     $sql_update = "UPDATE students SET fname ='$new_fname', username ='$new_uname', regno ='$new_regno', email ='$new_mail' WHERE student_id='$stuid'";
      $res_update = mysqli_query($mysqli, $sql_update);
  
      if (mysqli_stmt_affected_rows($res_update) > 0) { 	
        echo '<script>alert("Details Updated ")</script>';
              header('refresh:0.2;url= userdetails.php');

              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);

      }else {
               
              echo '<script>alert("Error Occurred. Please try again")</script>';
              header('refresh:0.2;url= userdetails.php');
               
              mysqli_stmt_close($stmt);
              mysqli_close($mysqli);
          }
      }      

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