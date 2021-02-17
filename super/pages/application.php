<?php
  $avt = 'app';
  include("header.php");
?>
<?php
// here we will use alert
?>
<div class="dashboard-wrapper">
<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Applicants</h2>
                            <p class="pageheader-text">View  with Calender or Table</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <?php
                $getbook = mysqli_query($connection, "SELECT * FROM `application`");
                // $x = mysqli_fetch_array($getbook);
                while($row = mysqli_fetch_array($getbook))
                {
                $check_in = $row["date_created"];
                $xy = $row["date_created"];
                // qwerty
                $date1 = str_replace('-', '/', $xy);
                $check_out = date('Y-m-d',strtotime($date1 . "+1 days"));
                // ed
                $fullname = $row["firstname"];
                $email = $row["email"];
                $c_d = date("Y-m-d");
                // GET A TEST FOR COLOR
                // $payment_stat = $row["payment_status"];
                    // color
                    $bg = '#F6591A';
                    $bc = '#F6591A';
                $getall[] = array('title'=>''.$fullname.' '.$email.' - Registration No. .'.$row['reg_no'].'',
                    'url'=>'single_app.php?edit='.$row['id'].'',
                     'start'=>''.$check_in.'',
                    'end'=>''.$check_out.'',
                    'backgroundColor'=>$bg,
                    'borderColor'=>$bc);
                }
                ?>
                <!-- ============================================================== -->
                <!-- simple calendar -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id='calendarx1'></div>
                            </div>
                            <script>
                                $(document).ready(function() {
$('#calendarx1').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
    },
    defaultDate: '<?php echo date("Y-m-d"); ?>',
    navLinks: true, // can click day/week names to navigate views
    editable: false,
    eventLimit: true, // allow "more" link when too many events
    events:<?php echo json_encode($getall); ?>
});

}); 
                            </script>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end simple calendar -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table multiselects  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                            <?php
                              $query = "SELECT * FROM `application`";
                              $result = mysqli_query($connection, $query);
                              if ($result) {
                                $inr = mysqli_num_rows($result);
                               }?> 
                                <h5 class="mb-0">Total Applicant(<?php echo $inr; ?>) </h5>
                                <p>View Applicant Details</p>
                                <div style="float: right;">
                                <!-- <a href="#" class="btn btn-dark btn-rounded btn-lg">Add Manual Application</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <?php
                                          $getbook = mysqli_query($connection, "SELECT * FROM `application`");
                                        ?>
                                            <tr>
                                                <th>Reg No.</th>
                                                <th>Full Name</th>
                                                <th>E-mail</th>
                                                <th>Country</th>
                                                <th>Course</th>
                                                <th>Date</th>
                                                <th>Address</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (mysqli_num_rows($getbook) > 0) {
                                      while($row = mysqli_fetch_array($getbook, MYSQLI_ASSOC)) {
                                        // $check_in = $row["check_in"];
                                        // $xy = $row["check_out"];
                                          ?>
                                            <tr>
                                                <td><?php echo $row["reg_no"]; ?></td>
                                                <td><?php echo $row["firstname"]." ".$row["lastname"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["country"]; ?></td>
                                                <td><?php echo $row["course"]; ?>  </td>
                                                <td><?php echo $row["date_created"]; ?></td>
                                                <td><?php echo $row["address"]; ?></td>
                                                <td> <a href="single_app.php?edit=<?php echo $row["id"]; ?>" class="btn btn-rounded btn-primary">overview</a></td>
                                            </tr>
                                            <?php }
                                                }
                                             else {
                                            echo "0 Booking";
                                              }
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table multiselects  -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- end events calendar -->
                <!-- ============================================================== -->
            </div>
<!-- end of inventory -->
<?php
  include("footer.php");
?>
