<?php 

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['entrance_student'] )){
    header("Location: main.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="../img/eespr.ico">
    <title>EESPR</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="../bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <?php include('includes/head.php'); ?>

</head>
<style type="text/css">
        .panel-body{
        border-radius: 100px;
        }
        body {
        padding-top: 150px;
        padding-bottom: 0px;
        background-color: #eee;
        background: rgb(46,107,159);
        background: linear-gradient(90deg, rgba(46,107,159,1) 9%, rgba(46,107,159,1) 46%, rgba(46,107,159,1) 100%);
        }
        p{
        text-align:center;
        font-weight: bold;
        }
        .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #337ab7;
        color: white;
        text-align: center;
        }
        h3{
        color: white;
        font-weight: bold;
        }
    </style>
<body>

    <div class="container">
        <div id="target1"></div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                    <br>
                        <h3 class="panel-title text-center">HELLO EXAMINEE</h3>
                        <h3 class="panel-title text-center">PLEASE LOGIN TO TAKE THE EXAM</h3>
                    <br>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="username" id="username" type="text" autofocus>
                                    <span class="help-inline"></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                    <span class="help-inline"></span>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" class="btn btn-lg btn-primary btn-block btn-login"><strong>LET ME IN</strong></a>
                                <br>
                                <!--<a href="signup.php" class="btn btn-lg btn-primary btn-block btn-login">Register</a>-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <br>
    <p>Entrance Examination System with Program Recommendation</p>
    </div>
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Bootstrap Material Core JavaScript -->
    <script src="../bower_components/bootstrap-material-design/dist/js/ripples.min.js"></script>
    <script src="../bower_components/bootstrap-material-design/dist/js/material.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Notify -->
    <script src="../bower_components/notifyjs/dist/notify.js"></script>
    <script src="../bower_components/notifyjs/dist/styles/bootstrap/notify-bootstrap.js"></script>
    <!-- spinJS -->
    <script src="../bower_components/spin.js/spin.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../js/student/login.js" type="text/javascript"></script>
</body>

</html>
