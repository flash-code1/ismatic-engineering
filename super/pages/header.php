<!doctype html>
<html lang="en">
<?php
include("../functions/db/connect.php");
session_start();

$username = $_SESSION["username"];
$email = $_SESSION["email"];
if(!$_SESSION["email"] != ""){
    header("location: ../account/index.php");
    exit;
}
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../design/x2/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../design/x2/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../design/x2/assets/libs/css/style.css">
    <link rel="stylesheet" href="../design/x2/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../design/x2/assets/vendor/vector-map/jqvmap.css">
    <link href="../design/x2/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link rel="stylesheet" href="../design/x2/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../design/x2/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../design/x2/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" type="text/css" href="../design/x2/assets/vendor/daterangepicker/daterangepicker.css" />
    <!-- imporing DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../design/x2/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../design/x2/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../design/x2/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../design/x2/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <!-- now sweet alerts -->
    <link href='../design/x2/assets/vendor/full-calendar/css/fullcalendar.css' rel='stylesheet' />
    <link href='../design/x2/assets/vendor/full-calendar/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <!-- <script src="../design/assets/js/plugins/sweetalert2.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
    <!-- <link rel="stylesheet" href="../design/dist/sweetalert2.min.css">
    <script src="../design/dist/sweetalert2.all.min.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>
    <title>BFSL - Admin</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="dashboard.php" style="font-size: 12px;">BFSL ADMIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="booking_room.php" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <!-- <div class="notification-list-user-img"><img src="../design/x2/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div> -->
                                                    <!-- <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div> -->
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="https://www.bfsl633.com" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://firebasestorage.googleapis.com/v0/b/churaton-6e682.appspot.com/o/logo3.png?alt=media&token=d4b38801-90cc-4187-bb4e-84d752a9fdfb" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"> <?php echo $username; ?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a> -->
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> -->
                                <a class="dropdown-item" href="../functions/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?php if ($avt == 'index') { echo 'active'; }?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard.php">Operation Summary</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($avt == 'invent') { echo 'active'; }?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Blog & News</a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="add_blog.php">Upload Blog & News<span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="view_blog.php">View Blog & News</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($avt == 'app') { echo 'active'; }?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-table"></i>Registration</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="application.php">View Applicant</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#">Resturant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Event</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gym</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Inbox
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($avt == 'faq') { echo 'active'; }?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Enquiry/FAQ <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq.php">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->