<!DOCTYPE html>
<html lang="en">

<head>

<?php include('includes/head.php'); ?>

</head>

<body>

    <?php include('includes/nav1.php'); ?>
    <div class="jumbotron">
        <h4>Thank you for using our app. Our System will send you a message about your password.</h4>
        </br>
        <small>If you still not receive the password for mobile. Go to the System Administration and ask for assistance.</small>
    </div>
    <div class="container">
        <a href="login.php" class="btn btn-primary btn-lg btn-block">Login</a>
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
