<!DOCTYPE html>
<html lang="en">

<head>
    <?php
  require_once "../config.php";
  ?>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/bootstrap-5.1.3-dist/css/bootstrap.min.css" ><!-- LOCAL-->
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" href="script.js">
    
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login as an administrator</h4>
                            <div class="mt-4 text-center">
                                    Go back to<a href="../../index.html">Home Page</a>
                                </div>
                            <!---FORM ACTION-->
                            <form method="POST" class="my-login-validation" novalidate="" action="admin_php.php">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" style="border-color: #0a192f;" name="uname" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Enter your Username      
                                    </div>                                   
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
										
									</label>
                                    <input id="password" type="password" class="form-control" style="border-color: #0a192f;" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        
                                        <a href="../password-reset/reset_email.html" class="float-right">
											Forgot Password?
										</a>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" name="admin_logeen" style="background-color: #0a192f; color: white; border-color: cyan; border-radius: 20px;" class="btn btn-block">
										Login
									</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="../about.html">About</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../public/scripts/popper.min.js" ></script><!-- LOCAL-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../public/bootstrap-5.1.3-dist/js/bootstrap.min.js" ></script><!-- LOCAL-->
    <script src="./script.js"></script>
    <script>
        $(document).ready(function() {
            $("#exampleModalCenter").modal();
        });
    </script>
</body>

</html>

