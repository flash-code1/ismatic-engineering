<?php
  $avt = 'invent';
  include("header.php");
//   session_start();
?>
<?php
// If it is successfull, It will show this message
if (isset($_GET["message101"])) {
    $key = $_GET["message101"];
    // $out = $_SESSION["lack_of_intfund_$key"];
    echo '<script type="text/javascript">
    $(document).ready(function(){
        swal({
            type: "success",
            title: "New Blog",
            text: "Successfully Created",
            showConfirmButton: false,
            timer: 2000
        })
    });
    </script>
    ';
    $_SESSION["lack_of_intfund_$key"] = null;
}
// If it is not successfull, It will show this message
else if (isset($_GET["message404"])) {
  $key = $_GET["message404"];
  // $out = $_SESSION["lack_of_intfund_$key"];
  echo '<script type="text/javascript">
  $(document).ready(function(){
      swal({
          type: "error",
          title: "Blog Creation",
          text: "Error During Creation",
          showConfirmButton: false,
          timer: 2000
      })
  });
  </script>
  ';
  $_SESSION["lack_of_intfund_$key"] = null;
}
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
                            <h2 class="pageheader-title">Manage Blog Post </h2>
                            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Blog & News</a></li>
                                        <li class="breadcrumb-item active">Create & Manage</li>
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
                              $query = "SELECT * FROM `blog`";
                              $result = mysqli_query($connection, $query);
                              if ($result) {
                                $inr = mysqli_num_rows($result);
                               }?> 
                                <h5 class="mb-0">Total Post(<?php echo $inr; ?>) </h5>
                                <p>Modify Blog</p>
                                <div style="float: right;">
                                <a href="add_blog.php" class="btn btn-dark btn-rounded btn-lg">Add a Post</a>
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
                                                <th>Title</th>
                                                <th>Sub-Title</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (mysqli_num_rows($resultx) > 0) {
                                      while($row = mysqli_fetch_array($resultx, MYSQLI_ASSOC)) {?>
                                            <tr>
                                                <td><?php echo $row["heading"]; ?></td>
                                                <td><?php echo $row["sub_heading"]; ?></td>
                                                <td><?php echo $row["content"]; ?></td>
                                                <td> <img src="../functions/blog/<?php echo $row["img"]; ?>" alt="" height="70px" width="70px"> </td>
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