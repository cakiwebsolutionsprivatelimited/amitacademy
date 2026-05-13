<?php 
session_start();
include('loginAction.php');
error_reporting(-1);
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
 
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amit College-CMS-Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="javascript:void(0);"><img class="logo-img" src="logo.jpg" alt="logo" height="100" width="100"></a>
            
            <span class="splash-description">Content Management System</span></div>
            <div class="card-body">
                <form method="post" autocomplete="off">
                <input type="hidden" name="act" value="login"/>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="uname" type="text" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-lg" name="logintype" required>
                        	<option value="">--Select Login Type--</option>
                            <option value="1">Officer</option>
                            <option value="2">Student</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <img src="./includes/captcha.php" id="captcha_image"/>
                            <?php //echo $_SESSION['code'];?>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" required name="capcode" id="capcode" class="form-control" placeholder="Enter Captcha">
                            </div>
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
</body>
 
</html>