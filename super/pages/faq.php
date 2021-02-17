<?php
  $avt = 'faq';
  include("header.php");
//   session_start();
?>
<!-- body of inventory -->
 <!-- ============================================================== -->
 <div class="dashboard-wrapper">
<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">FAQ </h2>
                            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Enquiries & Faq</a></li>
                                        <li class="breadcrumb-item active">View FAQ</li>
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
                    <!-- ============================================================== -->
                    <!-- data table multiselects  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                            <?php
                              $query = "SELECT * FROM `enquiries`";
                              $result = mysqli_query($connection, $query);
                              if ($result) {
                                $inr = mysqli_num_rows($result);
                               }?> 
                                <h5 class="mb-0">Total Enquiry(<?php echo $inr; ?>) </h5>
                                <p>Contact and Clients Details</p>
                                <div style="float: right;">
                                <!-- <a href="add_blog.php" class="btn btn-dark btn-rounded btn-lg">Add a Post</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <?php
                                          $resultx = mysqli_query($connection, $query);
                                        ?>
                                            <tr>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (mysqli_num_rows($resultx) > 0) {
                                      while($row = mysqli_fetch_array($resultx, MYSQLI_ASSOC)) {?>
                                            <tr>
                                                <td><?php echo $row["name"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["message"]; ?></td>
                                                <!-- <td> <a href="#" class="btn btn-rounded btn-primary">overview</a></td> -->
                                            </tr>
                                            <?php }
                                                }
                                             else {
                                            echo "0 Enquiries";
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
            </div>
<!-- end of inventory -->
<?php
  include("footer.php");
?>