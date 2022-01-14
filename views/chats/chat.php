<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include('../session.php');
   //include('crt_grp.php')
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chatroom</title>

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

                <!--<li>
                    <a href="../boards/kanbabn.php"> <i class="fas fa-clipboard" aria-hidden="true"></i>&nbsp; Kanban</a>
                </li> -->

                <li>
                    <a href="../activity/activity.php"><i class="fas fa-chart-pie" aria-hidden="true"></i> &nbsp; User Activity</a>
                </li>

                <li>
                    <a href="../tasks/tasks.php"> <i class="fas fa-tasks" aria-hidden="true"></i>&nbsp; Tasks</a>
                </li>

                <li class="active">
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
                <div class="row"> <!--COLUMN 1-->
                     
                    <div class="row"><!--GROUP CHAT- row 1 col 1-->
                         <!--WORKSPACE -->
                        <div class="box box-danger boxez" class="col">
                            <div class="box-header with-border">
                            <h3 class="box-title" style="text-align:center;">GROUP CHAT</h3>
                            </div><!-- /.box-header -->
                            <form method="POST">
                                    <div class=""><!--ROW!: select group to chat in-->
                                        <select name="group_disp" style="width:auto;">
                                                <option disabled selected >-- Select Group to chat in --</option>
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

                            <div id="container"class="box " class="col">   <!--grp chat container-->
                              <main >  
                              <header>
                                <div class="box-header">
                                    <h2 class="box-title" style="text-align:center;">GROUP 1</h2>
                                </div>
                            </header>
                            <form id="myform" action="post_chat.php" method="POST" > <!--group chat form-->
                                <div class="inner_div" id="chathist">
                                <?php
                                $query = "SELECT * FROM chats";
                                $run = $mysqli->query($query);
                                $i=0;

                                while($row = $run->fetch_array()) :
                                if($i==0){
                                $i=5;
                                $first=$row;
                                ?>
                                <div id="triangle1" class="triangle1"></div>
                                <div id="message1" class="message1">
                                <span style="color:white;float:right;">
                                <?php echo $row['msg']; ?></span> <br/>
                                <div>
                                <span style="color:black;float:left;
                                font-size:10px;clear:both;">
                                    <?php echo $row['uname']; ?>,
                                        <?php echo $row['dt']; ?>
                                </span>
                                </div>
                                </div>
                                <br/><br/>
                                <?php
                                }
                                else
                                {
                                if($row['uname']!=$first['uname'])
                                {
                                ?>
                                <div id="triangle" class="triangle"></div>
                                <div id="message" class="message">
                                <span style="color:white;float:left;">
                                <?php echo $row['msg']; ?>
                                </span> <br/>
                                <div>
                                <span style="color:black;float:right;
                                        font-size:10px;clear:both;">
                                    <span style="font-weight: bold;"><?php echo $row['uname']; ?> </span>,
                                        <?php echo $row['dt']; ?>
                                </span>
                                </div>
                                </div>
                                <br/><br/>
                                <?php
                                }
                                else
                                {
                                ?>
                                <div id="triangle1" class="triangle1"></div>
                                <div id="message1" class="message1">
                                <span style="color:white;float:right;">
                                <?php echo $row['msg']; ?>
                                </span> <br/>
                                <div>
                                <span style="color:black;float:left;
                                        font-size:10px;clear:both;">
                                <?php echo $row['uname']; ?>,
                                    <?php echo $row['dt']; ?>
                                </span>
                                </div>
                                </div>
                                <br/><br/>
                                <?php
                                }
                                }
                                endwhile;
                                ?>
                                </div>
                                    <footer>
                                        <table>
                                        <tr>
                                        <th>

                                            <!--get user name-->
                                            <?php
                                            $fullname = $fname['fname'];
                                            $get_uname=mysqli_query($mysqli,"SELECT * FROM students WHERE fname= '$fullname'");
                                            $res_uname = mysqli_fetch_assoc($get_uname);
                                            $user_name = $res_uname['username'];
                                            ?>

                                            <input class="input1" type="hidden"
                                                    id="uname" name="uname"
                                                    value="<?php echo  $user_name; ?>">
                                        </th>
                                        <th>
                                            <textarea id="msg" name="msg"
                                                rows='3' cols='50'
                                                placeholder="Type your message">
                                            </textarea></th>
                                        <th>
                                            <input class="input2" type="submit"
                                            id="submit" name="send_msg" value="SEND">
                                        </th>			
                                        </tr>
                                        </table>			
                                    </footer>
                            </form><!--chat form end-->
                            </main>
                            </div><!--chat form container>-->

                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">    
                                   
                            </div><!-- /.box-footer -->
                         </div><!--/.box -->

                     </div>


                </div>  <!--COLUMN 1 END-->
                
                <div class="row"><!--COLUMN 2--->

                    <div class="row"><!--PRIVATE CHAT - row 2 col 1-->
                        <!-- PRIVATE CHAT -->
                            <div class="box box-danger boxez" class="col">
                                <div class="box-header with-border">
                                <h3 class="box-title" style="text-align:center;">PRIVATE CHAT</h3>
                                </div><!-- /.box-header -->

                                <form method="POST">
                                    <div class=""><!--ROW!: select group member to chat wth-->
                                        <select name="group_disp" style="width:auto;">
                                                <option disabled selected >-- Select Member to chat with --</option>
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
                                </form><!--member select to chat with-->

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

                                <div id="container"class="box " class="col">   <!--private chat container-->
                              <main >  
                              <header>
                                <div class="box-header">
                                    <h2 class="box-title" style="text-align:center;">GROUP 1</h2>
                                </div>
                            </header>
                            <form id="myform" action="post_chat.php" method="POST" > <!--private chat form-->
                                <div class="inner_div" id="chathist">
                                <?php
                                $query = "SELECT * FROM chats";
                                $run = $mysqli->query($query);
                                $i=0;

                                while($row = $run->fetch_array()) :
                                if($i==0){
                                $i=5;
                                $first=$row;
                                ?>
                                <div id="triangle1" class="triangle1"></div>
                                <div id="message1" class="message1">
                                <span style="color:white;float:right;">
                                <?php echo $row['msg']; ?></span> <br/>
                                <div>
                                <span style="color:black;float:left;
                                font-size:10px;clear:both;">
                                    <?php echo $row['uname']; ?>,
                                        <?php echo $row['dt']; ?>
                                </span>
                                </div>
                                </div>
                                <br/><br/>
                                <?php
                                }
                                else
                                {
                                if($row['uname']!=$first['uname'])
                                {
                                ?>
                                <div id="triangle" class="triangle"></div>
                                <div id="message" class="message">
                                <span style="color:white;float:left;">
                                <?php echo $row['msg']; ?>
                                </span> <br/>
                                <div>
                                <span style="color:black;float:right;
                                        font-size:10px;clear:both;">
                                    <span style="font-weight: bold;"><?php echo $row['uname']; ?> </span>,
                                        <?php echo $row['dt']; ?>
                                </span>
                                </div>
                                </div>
                                <br/><br/>
                                <?php
                                }
                                else
                                {
                                ?>
                                <div id="triangle1" class="triangle1"></div>
                                <div id="message1" class="message1">
                                <span style="color:white;float:right;">
                                <?php echo $row['msg']; ?>
                                </span> <br/>
                                <div>
                                <span style="color:black;float:left;
                                        font-size:10px;clear:both;">
                                <?php echo $row['uname']; ?>,
                                    <?php echo $row['dt']; ?>
                                </span>
                                </div>
                                </div>
                                <br/><br/>
                                <?php
                                }
                                }
                                endwhile;
                                ?>
                                </div>
                                    <footer>
                                        <table>
                                        <tr>
                                        <th>

                                            <!--get user name-->
                                            <?php
                                            $fullname = $fname['fname'];
                                            $get_uname=mysqli_query($mysqli,"SELECT * FROM students WHERE fname= '$fullname'");
                                            $res_uname = mysqli_fetch_assoc($get_uname);
                                            $user_name = $res_uname['username'];
                                            ?>

                                            <input class="input1" type="hidden"
                                                    id="uname" name="uname"
                                                    value="<?php echo  $user_name; ?>">
                                        </th>
                                        <th>
                                            <textarea id="msg" name="msg"
                                                rows='3' cols='50'
                                                placeholder="Type your message">
                                            </textarea></th>
                                        <th>
                                            <input class="input2" type="submit"
                                            id="submit" name="send_priv_msg" value="SEND">
                                        </th>			
                                        </tr>
                                        </table>			
                                    </footer>
                            </form><!--private chat form end-->
                            </main>
                            </div><!--private chat form container>-->

  
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