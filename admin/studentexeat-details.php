        <?php
        session_start();
        error_reporting(0);
        include('../includes/dbconn.php');
        if (strlen($_SESSION['alogin']) == 0) {
        header('location:index.php');
        } else {

        // code for update the read notification status
        $isread = 1;
        $did = intval($_GET['exeatid']);
        date_default_timezone_set('UTC+0');
        $admremarkdate = date('Y-m-d G:i:s ', strtotime("now"));
        $sql = "UPDATE tblexeats set IsRead=:isread where id=:did";
        $query = $dbh->prepare($sql);
        $query->bindParam(':isread', $isread, PDO::PARAM_STR);
        $query->bindParam(':did', $did, PDO::PARAM_STR);
        $query->execute();

        // code for action taken on leave
        if (isset($_POST['update'])) {
        $did = intval($_GET['exeatid']);
        $description = $_POST['description'];
        $status = $_POST['status'];
        date_default_timezone_set('UTC+0');
        $admremarkdate = date('Y-m-d G:i:s ', strtotime("now"));

        $sql = "UPDATE tblexeats set AdminRemark=:description,Status=:status,AdminRemarkDate=:admremarkdate where id=:did";
        $query = $dbh->prepare($sql);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':admremarkdate', $admremarkdate, PDO::PARAM_STR);
        $query->bindParam(':did', $did, PDO::PARAM_STR);
        $query->execute();
        $msg = "Exeat updated Successfully";

        $number = $_POST['contact'];
        $message = $_POST['message'];
     
    
    
    // SEND SMS
    $curl = curl_init();
    
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://sms.arkesel.com/api/v2/sms/send',
        CURLOPT_HTTPHEADER => ['api-key: OkpTdzdUMm1iQkRnVG1CbWo='],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query([
            'sender' => 'TestApp',
            'message' => $_POST['message'],
            'recipients' => [$_POST['contact']]
        ]),
    ]);
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;



       
        } 
        
        ?>

        <!doctype html>
        <html class="no-js" lang="en">

        <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Panel - Student Exeat</title>
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
        <a href="dashboard.php"><img src="" alt="logo"></a>
        </div>
        </div>
        <div class="main-menu">
        <div class="menu-inner">
        <?php $page = "student";
        include '../includes/admin-sidebar.php'
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
        </div>
        </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area">
        <div class="row align-items-center">
        <div class="col-sm-6">
        <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Exeat Details</h4>
        <ul class="breadcrumbs pull-left">
        <li><a href="dashboard.php">Home</a></li>
        <!--for print function-->                                        
        <li><button  class="btn btn-info btn-xs" onclick="window.print()">Print Report</button></li>
  
  
<!--for print function--> 
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
            


        <!-- row area start -->
        <div class="row">

        <!-- Striped table start -->
        <div class="col-lg-12 mt-5">
        <?php if ($error) { ?><div class="alert alert-danger alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($error); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>

        </div><?php } else if ($msg) { ?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($msg); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div><?php } ?>



        <div class="card">
        <div class="card-body">
            


        <div class="single-table">
        <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">

        <tbody>








        <?php
        $lid = intval($_GET['exeatid']);
        $sql = "SELECT tblexeats.id as lid,tblstudents.FirstName,tblstudents.LastName,tblstudents.StdId,tblstudents.id,tblstudents.Gender,tblstudents.Phonenumber,tblstudents.EmailId,tblexeats.ExeatType,tblexeats.Description,tblexeats.PostingDate,tblexeats.FromDate,tblexeats.ToDate,tblexeats.Status,tblexeats.AdminRemark,tblexeats.AdminRemarkDate from tblexeats join tblstudents on tblexeats.stdid=tblstudents.id where tblexeats.id=:lid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':lid', $lid, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
        foreach ($results as $result) {
        ?>

        <tr>

        <td><b>Index Number:</b></td>
        <td colspan="1"><?php echo htmlentities($result->StdId); ?></td>
        <td> <b>Student Name:</b></td>
        <td colspan="1"><a href="update-student.php?stdid=<?php echo htmlentities($result->id); ?>" target="_blank">
        <?php echo htmlentities($result->FirstName . " " . $result->LastName); ?></a></td>

        <td><b>Gender :</b></td>
        <td colspan="1"><?php echo htmlentities($result->Gender); ?></td>
        </tr>

        <tr>
        <td><b>Student Email:</b></td>
        <td colspan="1"><?php echo htmlentities($result->EmailId); ?></td>
        <td><b>Student Contact:</b></td>
        <td colspan="1"><?php echo htmlentities($result->Phonenumber); ?></td>

        <td><b>Exeat Type:</b></td>
        <td colspan="1"><?php echo htmlentities($result->ExeatType); ?></td>

        </tr>

        <tr>

        <td><b>Exeat From:</b></td>
        <td colspan="1"><?php echo htmlentities($result->FromDate); ?></td>
        <td><b>Exeat Upto:</b></td>
        <td colspan="1"><?php echo htmlentities($result->ToDate); ?></td>

        </tr>



        <tr>
        <td><b>Exeat Applied:</b></td>
        <td><?php echo htmlentities($result->PostingDate); ?></td>

        <td><b>Status:</b></td>
        <td><?php $stats = $result->Status;
        if ($stats == 1) {
        ?>
        <span style="color: green">Approved</span>
        <?php }
        if ($stats == 2) { ?>
        <span style="color: red">Declined</span>
        <?php }
        if ($stats == 0) { ?>
        <span style="color: blue">Pending</span>
        <?php } ?>
        </td>


        </tr>

        <tr>
        <td><b>Exeat Conditions: </b></td>
        <td colspan="5"><?php echo htmlentities($result->Description); ?></td>

        </tr>

        <tr>
        <td><b>Admin Remark: </b></td>
        <td colspan="12"><?php
        if ($result->AdminRemark == "") {
        echo "Waiting for Action";
        } else {
        echo htmlentities($result->AdminRemark);
        }
        ?></td>
        </tr>

        <tr>
        <td><b>Admin Action On: </b></td>
        <td><?php
        if ($result->AdminRemarkDate == "") {
        echo "NA";
        } else {
        echo htmlentities($result->AdminRemarkDate);
        }
        ?></td>
        </tr>


        <?php
        if ($stats == 0) {

        ?>
        <tr>
        <td colspan="12">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">SET ACTION</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SET ACTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <form method="POST" name="adminaction">
        <div class="modal-body">
            <select class="custom-select" name="status" required="">
                <option value="">Choose...</option>
                <option value="1">Approve</option>
                <option value="2">Decline</option>
            </select></p>
            <br>
            <p><textarea id="textarea1" class="form-control" name="description" placeholder="Description" row="5" maxlength="500" required></textarea></p>
        </div>


 <!--
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="update">Apply</button>
        </div>
-->



        <!--    text message section   -->

        <form method="POST" name="adminaction">
            <div class="modal-body">
                <!--    text message section   -->
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Parent Contact</label>
                    <input class="form-control" name="contact" type="tel" maxlength="14" autocomplete="off"  placeholder="Enter parent Phonenumber to send text" value="">

                </div>
                <br>
                <label for="example-text-input" class="col-form-label">Send Message</label>
                <textarea id="textarea1" name="message" class="form-control" placeholder="Enter text to send message" row="5" maxlength="500" required></textarea>
                <br>
                 <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="update">Apply</button>
        </div>

        </form>


        <!--    text message section  end here -->

























        </div>
        </div>
        </div>

        </td>
        </tr>
        <?php } ?>
        </form>
        </tr>
        <?php $cnt++;
        }
        } ?>
        </tbody>
        </tbody>
        </table>

        <div class="studentImage float-right" style="width: 10rem; height:10rem; border:1px solid green;">

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- Striped table end -->

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
        <script>

        </script>
        <!-- all line chart activation -->
        <script src="assets/js/line-chart.js"></script>
        <!-- all pie chart -->
        <script src="assets/js/pie-chart.js"></script>

        <!-- others plugins -->
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/scripts.js"></script>
        </body>

        </html>

        <?php } ?>