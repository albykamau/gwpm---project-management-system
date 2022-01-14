<!DOCTYPE html>
<html lang="en">

<head
<?php
  include_once "signup_php.php";
  ?>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Student's Sign Up Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/bootstrap-5.1.3-dist/css/bootstrap.min.css" ><!-- LOCAL-->
    <link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                   
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Create your students' account</h4>
                            <div class="mt-4 text-center">
                                    Are you a lecturer? <a href="../lecsignup/lecsignup.php">Create lecturer Account</a>
                                </div>
                            <!-- signup validation-->
                            <form method="POST" class="my-login-validation" novalidate="" action="signup_php.php">
                                <div class="form-group">
                                    <label for="fname">Full Name</label>
                                    <input id="fname" type="text" class="form-control" style="border-color: #0a192f;" name="name" required autofocus>
                                    <div class="invalid-feedback">
                                        What are your full names?
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" style="border-color: #0a192f;" name="email" required>
                                    <div class="invalid-feedback">
                                        Your email is invalid
                                        <?php if (isset($email_error)): ?> <span> <?php echo $email_error; ?></span> <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" style="border-color: #0a192f;" name="uname" required>
                                    <div class="invalid-feedback">
                                        Create a username
                                        <?php if (isset($name_error)): ?> <span> <?php echo $name_error; ?></span> <?php endif ?>        
                                    </div>
                                    
                                </div>
                                
                                 <!-- <div class="form-group">
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" name="student_radio" id="student_radio" style="border-color: #0a192f;" class="custom-control-input" required="">
                                        <label for="student_radio" class="custom-control-label">Student</label>
                                        
                                    </div>
                                    <div class="custom-radio custom-control custom-control-inline">
                                    <input type="radio" name="lec_radio" id="lec_radio" style="border-color: #0a192f;" class="custom-control-input" required="">
                                        <label for="lec_radio" class="custom-control-label">Lecturer</label>
                                       <div class="invalid-feedback">
                                            Are you a lecturer or a student?
                                        </div> 
                                    </div>
                                </div> --> 

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" style="border-color: #0a192f;" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree" style="border-color: #0a192f;" class="custom-control-input" required="">
                                        <label for="agree" class="custom-control-label">I agree to the <a href="../terms.html">Terms and Conditions</a></label>
                                        <div class="invalid-feedback">
                                            You must agree with the Terms and Conditions
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" name="submeet" style="background-color: #0a192f; color: white; border-color: cyan; border-radius: 20px;" class="btn btn-block">
										Register
									</button>
                                </div>
                                <div class="mt-4 text-center">
                                    Already have an account? <a href="../login/login.php">Login</a>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="../../index.html">Go To Homepage</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2021 &mdash; SCT221-0568/2017
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../../public/scripts/jquery-3.3.1.slim.min.js" ></script><!-- LOCAL-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../public/bootstrap-5.1.3-dist/js/bootstrap.min.js" ></script><!-- LOCAL-->
    <script src="./script.js"></script>
    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Changes On This Page Using JS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    JS has been added to Dashboard, Login, Signup page, Forgot password and reset password pages.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
    <script src="./js/draggable.js"></script>
    <script>
        $(document).ready(function() {
            $("#exampleModalCenter").modal();
        });
    </script>
</body>

</html>

