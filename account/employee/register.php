<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <style>
        @media only screen and (max-width: 600px) {
                    /* For mobile phones: */
                   .wizard-4 .step-container{
                       width:100vw !important
                   }
               
        .wizard-4 .step-container div.content{
            height:100% !important
        }
        .wizard-4 .action-bar{
            z-index:999 !important
            left:10px
        }
         }
        </style>
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div>
                   <form action="dashboard" method="POST" id="form-element">
 <div class="theme-form" enctype="multipart/form-data">
                        <div class="wizard-4" id="wizard">
                            <ul>
                                <li>
                                    <a class="logo text-start" href="./">
                                <img class="img-fluid logo-img for-light" src="../../images/logo.svg" alt="looginpage">
                                <img class="img-fluid logo-img for-dark" src="../../images/logo-light.svg" alt="looginpage">
                            </a>
                                </li>
                                <li><a href="#step-1">
                                        <h4>1</h4>
                                        <h5>Personal</h5><small>Add personal details</small>
                                    </a></li>
                                <li><a href="#step-2">
                                        <h4>2</h4>
                                        <h5>Account</h5><small>Add account info</small>
                                    </a></li>
                                <li class="pb-0"><a href="#step-3">
                                        <h4>3</h4>
                                        <h5> Done <i class="fa fa-thumbs-o-up"></i></h5><small>Complete.. !</small>
                                    </a></li>
                                <li> <img src="../assets/images/login/icon.png" alt="looginpage"></li>
                            </ul>
                            <div id="step-1">
                                <div class="wizard-title">
                                    <h2>Sign up to account</h2>
                                    <h5 class="text-muted mb-4">Enter your fullname and contact information</h5>
                                </div>
                                <div class="login-main">
                                    <div class="theme-form">
                                        <div class="form-group mb-3">
                                            <label for="name">First Name</label>
                                            <input class="form-control" id="name" name="firstname" type="text" placeholder="Johan" required="required"  required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="lname">Last Name</label>
                                            <input class="form-control" id="lname" name="lastname" type="text" placeholder="Deo"  required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="contact">Contact No.</label>
                                            <input class="form-control" id="contact" name="phone" type="number" placeholder="123456789"  required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-2">
                                <div class="wizard-title">
                                    <h2>Sign up to account</h2>
                                    <h5 class="text-muted mb-4">Enter your email & password for authentication</h5>
                                </div>
                                <div class="login-main">
                                    <div class="theme-form">
                                        <div class="form-group mb-3 m-t-15">
                                            <label for="exampleFormControlInput1">Email address</label>
                                            <input class="form-control" name="email" id="exampleFormControlInput1" type="email" placeholder="name@example.com"  required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password"  required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input class="form-control" name="c_password" id="exampleInputcPassword1" type="password" placeholder="Enter again"  required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <div class="wizard-title">
                                    <h2>Sign up to account</h2>
                                    <h5 class="text-muted mb-4">Upload your profile picture</h5>
                                </div>
                                <div class="login-main">
                                    <div class="theme-form">
                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlInput1">Profile Picture</label>
                                            <input class="form-control" type="file" accept="image/*" required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</form>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="../assets/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js-->
        <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="../assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <script src="../assets/js/form-wizard/form-wizard-five.js"></script>
        <script src="../assets/js/tooltip-init.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="../assets/js/script.js"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>