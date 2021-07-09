<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title style="color:green;">Stay sober,save the future!</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" style="">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php" style="font-size: 2.5em;color:green;">Future Save</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php"><button class='btn btn-success'>HOME</button></a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="portal.php"><button class='btn btn-success'>LOGIN || SIGNUP</button></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="width:60%;text-align:left;padding-top: calc(5rem + 57px);padding-bottom: 2rem;margin-bottom: 2rem;position:relative;">
            <fieldset class="loginform">
                <center>
                    <legend><h1>Login Here</h1></legend>
                    <form action="" method="post">
                        <p>
                            Enter your username<br/>
                            <input style="width:60%;height:3.5rem;text-align: center;" type="text" placeholder="Your email or phonenumber" name="username" required="required"/>
                        </p>
                        <p>
                            Enter your password<br/>
                            <input style="width:60%;height:3.5rem;text-align: center;" type="text" placeholder="Your password goes here" name="password" required="required"/>
                        </p>
                        <p>
                            <input style="width:40%;height:4rem;text-align: center;" type="submit" class="btn btn-success" value="LOGIN"><br/><a href="forgotpassword.php">Forgot password?</a>
                        </p>
                    </form>
                    <p>
                        or alternative <button style="background-color: transparent;" class="switchToSignUp">Sign up here</button>
                    </p>
                </center>
            </fieldset>
            <fieldset class="signupform" style="display: none;">
                <center>
                    <legend><h1>Sign up form</h1></legend>
                    <form action="" method="post">
                        <p>
                            Enter your first name<br/>
                            <input style="width:60%;height:2.5rem;text-align: center;" type="text" placeholder="first name goes here" name="firstname" required="required"/>
                        </p>
                        <p>
                            Enter your last name<br/>
                            <input style="width:60%;height:2.5rem;text-align: center;" type="text" placeholder="last name goes here" name="lastname" required="required"/>
                        </p>
                        <p>
                            Enter your email address<br/>
                            <input style="width:60%;height:2.5rem;text-align: center;" type="email" placeholder="email address goes here" name="email" required="required"/>
                        </p>
                        <p>
                            Enter your phonenumber<br/>
                            <input style="width:60%;height:2.5rem;text-align: center;" type="text" placeholder="phonenumber goes here" name="phonenumber" required="required"/>
                        </p>
                        <p>
                            Enter your desired password<br/>
                            <input style="width:60%;height:2.5rem;text-align: center;" type="password" placeholder="password goes here" name="password" required="required"/>
                        </p>
                        <p>
                            Confirm your desired password<br/>
                            <input style="width:60%;height:2.5rem;text-align: center;" type="password" placeholder="repeat your password here" name="passwordconfirm" required="required"/>
                        </p>
                        <p>
                            <input style="width:40%;height:4rem;text-align: center;" type="submit" class="btn btn-success" value="Sign Up">
                        </p>
                    </form>
                    <p>
                        already signed up? <a href=''><button style="background-color: transparent;border:transparent;" class="switchToLogin">Login here</button></a>
                    </p>
                </center>
            </fieldset>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">&copy; Future Global Softwares. All rights reserved</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $('.switchToSignUp').click(function(){
                    $(".signupform").show();
                    $(".loginform").hide();
                });
                $('.switchToLogin').click(function(){
                    $(".signupform").hide();
                    $(".loginform").show();
                });
            });
        </script>
    </body>
</html>
