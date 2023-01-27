<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/head.php'); ?>
</head>
<body>

    <?php include('includes/nav1.php'); ?>
    <div class="jumbotron">
        <h4>Thank you for using our app. <br><br>Our System will send you a message about your Examination Results.</h4>
        </br>
        <small>If you still not receive the Exam Result. <br>Go to the View Results or Detailed Results at your Profile.</small>
    </div>
    <div class="container">
        <a href="main.php" class="btn btn-primary btn-lg btn-block">Go to Home</a>
    </div>
    <script src="../browser-components/jquery/dist/jquery.min.js"></script>
    <script src="../browser-components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../browser-components/bootstrap-material-design/dist/js/ripples.min.js"></script>
    <script src="../browser-components/bootstrap-material-design/dist/js/material.min.js"></script>
    <script src="../browser-components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
        $(function() {
            $.material.init();
        });
    </script>
</body>

</html>
