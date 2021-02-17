  <?php
  $avt = 'index';
  include("header.php");
  ?>
  <!-- ============================================================== -->
  <div class="dashboard-wrapper">
            <div class="dashboard-finance">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Operation Summary </h3>
                                <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Summary</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-10 col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                            <form>
                                <!-- <div class="form-group">
                                    <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                </div> -->
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Staff</h5>
                                            <h2 class="mb-0"> <?php 
                                             $query = "SELECT * FROM `admin`";
                                             $result = mysqli_query($connection, $query);
                                             if ($result) {
                                               $inr = mysqli_num_rows($result);
                                              echo number_format($inr);
                                              }?></h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
	                                    </div>
	                                </div>
	                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Applicant</h5>
	                                        <h2 class="mb-0">
                                            <?php 
                                             $query = "SELECT * FROM `application`";
                                             $result = mysqli_query($connection, $query);
                                             if ($result) {
                                               $inr = mysqli_num_rows($result);
                                              echo number_format($inr);
                                              }?>
                                            </h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-users fa-fw fa-sm text-info"></i>
	                                    </div>
	                                </div>
	                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Blog</h5>
	                                        <h2 class="mb-0"> 
                                            <?php 
                                             $query = "SELECT * FROM `blog`";
                                             $result = mysqli_query($connection, $query);
                                             if ($result) {
                                               $inr = mysqli_num_rows($result);
                                              echo number_format($inr);
                                              }?>
                                            </h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-eye fa-fw fa-sm text-info"></i>
	                                    </div>
	                                </div>
	                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Total Enquiry</h5>
	                                        <h2 class="mb-0"> 
                                            <?php 
                                             $query = "SELECT * FROM `enquiries`";
                                             $result = mysqli_query($connection, $query);
                                             if ($result) {
                                               $inr = mysqli_num_rows($result);
                                              echo number_format($inr);
                                              }?>
                                            </h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
	                                        <i class="fa fa-phone fa-fw fa-sm text-info"></i>
	                                    </div>
	                                </div>
	                            </div>
                        </div>
                    </div>
                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- campaign activities   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Staff</h3>
                                </div>
                                <?php
                              $query = "SELECT * FROM `admin`";
                              $result = mysqli_query($connection, $query);
                              if ($result) {
                                $inr = mysqli_num_rows($result);
                               }?> 
	                            <div class="card">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <?php
                                          $resultx = mysqli_query($connection, $query);
                                        ?>
                                            <tr>
                                                <th>Username</th>
                                                <th>E-mail</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (mysqli_num_rows($resultx) > 0) {
                                      while($row = mysqli_fetch_array($resultx, MYSQLI_ASSOC)) {?>
                                            <tr>
                                                <td><?php echo $row["username"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["firstname"]; ?></td>
                                                <td><?php echo $row["lastname"]; ?></td>
                                                <!-- <td> <a href="#" class="btn btn-rounded btn-primary">overview</a></td> -->
                                            </tr>
                                            <?php }
                                                }
                                             else {
                                            echo "0 Rooms";
                                              }
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>
            </div>
<?php
  include("footer.php");
?>