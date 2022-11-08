<?php
session_start();
error_reporting(0);
include('../includes/dbconn.php');
if (strlen($_SESSION['alogin']) == 0) {
header('location:index.php');
} else {
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Admin Panel - Student Exeat</title>
<link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/themify-icons.css">
<link rel="stylesheet" href="../assets/css/metisMenu.css">
<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/css/slicknav.min.css">
<!-- amchart css -->
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<!-- others css -->
<link rel="stylesheet" href="../assets/css/typography.css">
<link rel="stylesheet" href="../assets/css/default-css.css">
<link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.css">
<!-- modernizr css -->
<script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- preloader area start -->
<div id="preloader">
<div class="loader"></div>
</div>
<!-- preloader area end -->

<div class="page-container">
<!-- sidebar menu area start -->
<div class="sidebar-menu">
<div class="sidebar-header">
<div class="logo">
<a href="dashboard.php"><img src="../assets/images/logo.jpeg "style="border-radius :50%; width: 100%;" alt="logo"></a>
</div>
</div>
<div class="main-menu">
<div class="menu-inner">
<?php
$page = 'dashboard';
include '../includes/admin-sidebar.php';
?>
</div>
</div>
</div>
<!-- sidebar menu area end -->
<!-- main content area start -->
<div class="main-content">
<!-- header area start -->
<div class="header-area">
<div class="row align-items-center">
<!-- nav and search button -->
<div class="col-md-6 col-sm-8 clearfix">
<div class="nav-btn pull-left">
<span></span>
<span></span>
<span></span>
</div>

</div>
<!-- profile info & task notification -->
<div class="col-md-6 col-sm-4 clearfix">
<ul class="notification-area pull-right">
<li id="full-view"><i class="ti-fullscreen"></i></li>
<li id="full-view-exit"><i class="ti-zoom-out"></i></li>

<!-- Notification bell -->
<?php include '../includes/admin-notification.php' ?>

</ul>
<!-- notification ends -->
</div>
</div>
</div>
<!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
<div class="row align-items-center">
<div class="col-sm-6">
<div class="breadcrumbs-area clearfix">
<h4 class="page-title pull-left">Dashboard</h4>
<ul class="breadcrumbs pull-left">
<li><a href="dashboard.php">Home</a></li>
<li><span>Admin's Dashboard</span></li>
</ul>
</div>
</div>
<div class="col-sm-6 clearfix">
<div class="user-profile pull-right">
<img class="avatar user-thumb" src="../assets/images/admin.png" alt="avatar">
<h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN <i class="fa fa-angle-down"></i></h4>
<div class="dropdown-menu">
<a class="dropdown-item" href="logout.php">Log Out</a>
</div>
</div>
</div>
</div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
<!-- sales report area start -->
<div class="sales-report-area mt-5 mb-5">
<div class="row">


<div class="col-md-4">
<!-- small box -->
<div class="small-box bg-blue">
<div class="inner">
<h1><?php include 'counters/exeattype-counter.php' ?></h1>
<span>Exeat Types</span>
</div>
<div class="p-4">
<p class="header-title mb-0 text-white">Available Exeat Types</p>
</div>


<div class="icon">
<i class="fa-solid fa-book-open"></i>
</div>
<a href="add-exeattype.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<!-- example -->
<div class="col-md-4">
<!-- small box -->
<div class="small-box bg-warning">
<div class="inner">
<h1><?php include 'counters/std-counter.php' ?></h1>
<span>Active Students</span>
</div>
<div class="p-4">
<p class="header-title mb-0 text-white">Number Of Students</p>
</div>


<div class="icon">
<i class="fa-solid fa-graduation-cap"></i>
</div>
<a href="studentList.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-md-4">
<!-- small box -->
<div class="small-box bg-purple">
<div class="inner">
<h1><?php include 'counters/hos-counter.php' ?></h1>
<span>Students Houses/Halls</span>
</div>
<div class="p-4">
<p class="header-title mb-0 text-white">Avaliable Houses/Halls</p>
</div>


<div class="icon">
<i class="fa fa-users"></i>
</div>
<a href="house.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-md-4">
<!-- small box -->
<div class="small-box bg-purple">
<div class="inner">
<h1><?php include 'counters/pendingapp-counter.php' ?></h1>
<span>Pending</span>
</div>
<div class="p-4">
<p class="header-title mb-0 text-white">Pending Exeat Application</p>
</div>


<div class="icon">
<i class="fa-solid fa-book-open"></i>
</div>
<a href="pending-history.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-md-4">
<!-- small box -->
<div class="small-box bg-red">
<div class="inner">
<h1><?php include 'counters/declineapp-counter.php' ?></h1>
<span>Declined</span>
</div>
<div class="p-4">
<p class="header-title mb-0 text-white">Declined Exeat Application</p>

</div>


<div class="icon">
<i class="fa-solid fa-book-open"></i>
</div>
<a href="declined-history.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-md-4">
<!-- small box -->
<div class="small-box bg-green">
<div class="inner">
<h1><?php include 'counters/approvedapp-counter.php' ?></h1>
<span>Approved</span>
</div>
<div class="p-4">
<p class="header-title mb-0 text-white">Approved Exeat Application</p>

</div>


<div class="icon">
<i class="fa-solid fa-book-open"></i>
</div>
<a href="approved-history.php" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>



<!-- example end -->


</div>

<br>


<div class="row">

<!-- trading history area start -->
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="d-sm-flex justify-content-between align-items-center">
    <!-- <h4 class="header-title">Employee Leave History</h4> -->
    <div class="trd-history-tabs">
        <ul class="nav" role="tablist">
            <li>
                <a class="active" data-toggle="tab" href="dashboard.php" role="tab">Recent List</a>
            </li>
        </ul>
    </div>
    <select class="custome-select border-0 pr-3">
        <option selected>Last 24 Hours</option>

    </select>
</div>
<!-- <h4 class="header-title"></h4> -->
<div class="single-table">
<div class="data-tables">
<table id="dataTable" class="table table-hover table-striped table-bordered progress-table text-center">
            <thead class="text-uppercase">

                <tr>
                    <td>S.N</td>
                    <td>Index Number</td>
                    <td width="120">Full Name</td>
                    <td>Exeat Type</td>
                    <td>Applied On</td>
                    <td>Start Date</td>
                    <td>End Date</td>

                     <td style="color:red">Over Stayed</td>
                    <td>Current Status</td>
                    <td></td>
                </tr>
            </thead>

            <tbody>
                <?php

                $sql = "SELECT tblexeats.id as lid,tblstudents.FirstName,tblstudents.LastName,tblstudents.StdId,tblstudents.id,tblexeats.ExeatType,tblexeats.PostingDate,tblexeats.FromDate,tblexeats.ToDate,tblexeats.Status from tblexeats join tblstudents on tblexeats.stdid=tblstudents.id order by lid desc limit 7";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) {
                ?>

                        <tr>
                            <td> <b><?php echo htmlentities($cnt); ?></b></td>
                            <td><?php echo htmlentities($result->StdId); ?></td>
                            <td><a href="update-student.php?stdid=<?php echo htmlentities($result->id); ?>" target="_blank"><?php echo htmlentities($result->FirstName . " " . $result->LastName); ?></a></td>
                            <td><?php echo htmlentities($result->ExeatType); ?></td>
                            <td><?php echo htmlentities($result->PostingDate); ?></td>
        <td><?php echo htmlentities($result->FromDate); ?></td>
       
        <td><?php echo htmlentities($result->ToDate); ?></td>



                 <td style="color:red">
<!-- determing overstay exeat  -->
                  <?php 
                
                      


               // $datetime1=date_create($result->FromDate);
               // $datetime2=date_create($result->PostingDate);

                  
                   
                 //$overstay=date_diff($datetime1,$datetime2);
                    
                       
                     
                        // echo $overstay->format('%R%a days');
    
                         # code...
                     
                     
date_default_timezone_set("Africa/Accra");

   $now=time();
    $yourDate=strtotime($result->ToDate);
    $diff=$now-$yourDate;

    if($result->ToDate>$result->FromDate){

            echo round($diff/(60*60*24));



    }else{

        echo "Not Due";
    }

    




 
                    # code...
               

                
            
             ?> </td>








                            <td><?php $stats = $result->Status;

                                if ($stats == 1) {
                                ?>
                                    <span style="color: green">Approved <i class="fa fa-check-square-o"></i></span>
                                <?php }
                                if ($stats == 2) { ?>
                                    <span style="color: red">Declined <i class="fa fa-times"></i></span>
                                <?php }
                                if ($stats == 0) { ?>
                                    <span style="color: blue">Pending <i class="fa fa-spinner"></i></span>
                                <?php } ?>


                            </td>


                            <td><a href="studentexeat-details.php?exeatid=<?php echo htmlentities($result->lid); ?>" class="btn btn-secondary btn-sm">View Details</a></td>
                        </tr>
                <?php $cnt++;
                    }
                } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
<!-- trading history area end -->
</div>
<!-- row area end -->

</div>
<!-- row area start-->
</div>
<?php include '../includes/footer.php' ?>
<!-- footer area end-->
</div>
<!-- main content area end -->



</div>
<!-- jquery latest version -->
<script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/metisMenu.min.js"></script>
<script src="../assets/js/jquery.slimscroll.min.js"></script>
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<
<!-- all line chart activation -->
<script src="assets/js/line-chart.js"></script>
<!-- all pie chart -->
<script src="assets/js/pie-chart.js"></script>

<!-- others plugins -->
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/scripts.min.js"></script>
<script>
   $(document).ready(function(){
      $('mytable').dataTable();


   });
</script>



</body>


</html>

<?php } ?>