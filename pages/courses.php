<?php 
session_start();

if(!isset($_SESSION['entrance']) || empty($_SESSION['entrance'])){
    header("Location: index.php");
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

    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/bootstrap3-dialog/dist/css/bootstrap-dialog.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">
        <div id="target1"></div>
        <!-- Navigation -->
        <?php include('includes/nav-bar.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!--<h2 class="page-header">Courses</h2>-->
                    <br>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">
                            Courses
                        </li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-inline form-padding">
                        <form id="frmSearch" role="form">
                            <a onclick="create_course()" class="btn btn-primary">Add Course</a>
                        </form>
                    </div>
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Courses
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                              <table class="table table-bordered table-striped paginated tablesorter" style="margin-bottom:0;" id="tbl_courses">
                                  <thead>
                                      <tr role="row">
                                            <th class="sorting" >
                                              Course Code
                                            </th>
                                            <th class="sorting" >
                                                Course Description
                                            </th>
                                            <th class="sorting" width="15%">
                                                Passing Score
                                            </th>
                                            <th width="10%"></th>
                                      </tr>
                                  </thead>
                                  <tbody class="searchable">
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <?php include('modals/course.php'); ?>
    </div>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/jquery.tablesorter/dist/js/jquery.tablesorter.js"></script>
    <script src="../bower_components/jquery.tablesorter/dist/js/jquery.tablesorter.widgets.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/notifyjs/dist/notify.js"></script>
    <script src="../bower_components/notifyjs/dist/styles/bootstrap/notify-bootstrap.js"></script>
    <script src="../bower_components/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js"></script>
    <script src="../bower_components/spin.js/spin.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../js/pages/courses.js" type="text/javascript"></script>
</body>
</html>