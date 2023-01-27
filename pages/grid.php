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
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
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
                    <!--<h1 class="page-header">Passers</h1>-->
                    <br>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="main.php">Dashboard</a>
                        </li>
                        <li class="active">
                            List of Passers
                        </li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" download="passers.xls" onclick="exportToExcel(this, 'dataTables-example', 'Passers Data')">Export to Excel</a>
                    <a onclick="printToPrinter()" class="btn btn-success">Print</a>
                    <div class="col-lg-5 pull-right">
                        <label>Courses</label>
                        <select class="form-control" id="cboFilters"></select>
                    </div>
                    <div class="col-lg-2 pull-right">
                        <label>School Year</label>
                        <select class="form-control" id="cboYear"></select>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <input type="hidden" name="csrf" value="<?php echo $_SESSION['form_token'];?>">
                        <div class="panel-body" id="printTable">
                            <h2 class="text-center">List of Passers</h2>
                            <div class="dataTable_wrapper" id="wrapTable">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../bower_components/excellentexport/excellentexport.min.js"></script>
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/notifyjs/dist/notify.js"></script>
    <script src="../bower_components/notifyjs/dist/styles/bootstrap/notify-bootstrap.js"></script>
    <script src="../bower_components/spin.js/spin.js"></script>
    <script src="../js/pages/passers.js"></script>
    <script src="../js/pages/print.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>