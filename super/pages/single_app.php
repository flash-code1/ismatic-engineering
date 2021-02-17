<?php
  $avt = 'Customer';
  include("header.php");
//   session_start();
?>
<!-- body of inventory -->
<?php
if (isset($_GET["edit"])) {
    $id = $_GET["edit"];
    $getbook = mysqli_query($connection, "SELECT * FROM `application` WHERE id ='$id'");
    $row = mysqli_fetch_array($getbook);
                // $check_in = $row["check_in"];
                // $xy = $row["check_out"];
                // qwerty
                // $date1 = str_replace('-', '/', $xy);
                // $check_out = date('Y-m-d',strtotime($date1 . "+1 days"));
                // ed
                $fullname = $row["firstname"]." ".$row["middlename"]." ".$row["lastname"];
                $email = $row["email"];
                $phone = $row["phone"];
                $c_d = date("Y-m-d");
                $reg_date = $row["date_created"];
                $time_created = $row["time"];
                $address = $row["address"];
                $city = $row["city"];
                $country = $row["country"];
                $zip = $row["zip"];
                $bsc = $row["bsc"];
                $msc = $row["msc"];
                $phd = $row["phd"];
                $distance = $row["distance"];
                $entry_year = $row["year_of_entry"];
                $qualification = $row["qualification"];
                $entry_term = $row["entry_term"];
                $course = $row["course"];
                $study_country = $row["study_country"];
                $study_uni = $row["university"];
                $add_info = $row["add_info"];
                $question = $row["question"];
                // GET A TEST FOR COLOR
}
?>
 <!-- ============================================================== -->
 <div class="dashboard-wrapper">
<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Client's Details </h2>
                            <p class="pageheader-text">Customers Payment Status.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="application.php" class="breadcrumb-link">Applications</a></li>
                                        <li class="breadcrumb-item active">Applicant</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header p-4">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/churaton-6e682.appspot.com/o/logo3.png?alt=media&token=d4b38801-90cc-4187-bb4e-84d752a9fdfb" alt="" height="100px" width="100px">
                                     <a class="pt-2 d-inline-block" href="#">Byolafemzy Services Limited</a>
                                   
                                    <div class="float-right"> <h3 class="mb-0">Registration No. #<?php echo $row["reg_no"]; ?></h3>
                                    <?php echo date('Y-m-d'); ?>
                                </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                            <h5 class="mb-3">Applicant Details:</h5>
                                            <h3 class="text-dark mb-1"><?php echo strtoupper($fullname); ?></h3> 
                                            <div>Email: <?php echo $email; ?></div>
                                            <div>Phone: <?php echo $phone; ?></div>
                                            <div>Reg Date & Time: <?php echo $reg_date." & ".$time_created; ?></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-lg-4 col-sm-5">
                                        </div> -->
                                        <div class="col-sm-12">
                                            <table class="table table-clear">
                                                <tbody>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Country</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $country; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Address</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $address; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">City</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $city; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Zip</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $zip; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Foundation - Bsc</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $bsc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Foundation - Msc</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $msc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Foundation - Phd</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $phd; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Distance</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $distance; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Year of Entry</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $entry_year; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Qualification</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $qualification; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Entry Term</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $entry_term; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Course Choice</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $course; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Country of Choice</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $study_country; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">University of Choice</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $study_uni; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Additonal Information</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $add_info; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <strong class="text-dark">Question</strong>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="right"><?php echo $question; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                <div style="float: right;">
                                <!-- <a href="#" class="btn btn-success btn-rounded btn-lg">Print Invoice</a> -->
                                </div>
                                    <p class="mb-0">Suite 4, Louisiana 2 Shopping Plaza, Opposite Valencia Garden Estate, Close to Sunnyvale Homes, Dakwo District, Locogoma, Abuja</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
<!-- end of inventory -->
<?php
  include("footer.php");
?>