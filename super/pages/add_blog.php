<?php
  $avt = 'invent';
  include("header.php");
?>
<style>
    .file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
    .file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
    .file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
    .file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
    .file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
    .file-upload .file-select.file-select-disabled{opacity:0.65;}
    .file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
    .file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
    .file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
    </style>
<!-- start of inventory -->
<?php
// here we will use alert
?>
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Add Blog/News </h2>
                                    <p class="pageheader-text">Create a New Post</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Blog & News</a></li>
                                                <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Manage Rooms</a></li> -->
                                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        <div class="page-section" id="overview">
                            <!-- ============================================================== -->
                            <!-- overview  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- end overview  -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <form  action="../functions/blog_upload.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                        
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <!-- <h3 class="section-title">Room Details</h3> -->
                                    <p>Please Fill Carefully.</p>
                                </div>
                                <div class="card">
                                    <h5 class="card-header">Basic Form</h5>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"> <i class="fas fa-heart"></i></span></span>
                                                <input type="text" placeholder="Post Title" name="title" class="form-control" required>
                                            </div>
                                            <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"> <i class="fas fa-heart"></i></span></span>
                                                <input type="text" placeholder="Sub Title" name="sub_title" class="form-control" required>
                                            </div>
                                            <div class="input-group mb-3">
                                            <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Pick Post Image</div>
    <div class="file-select-name" id="noFile">No file chosen...</div> 
    <input type="file" name="chooseFile" id="chooseFile" accept="image/*">
  </div>
</div>
<script>
    $('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});
</script>
    </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"> <i class="fas fa-pencil-alt"></i></span></span>
                                                <textarea required="" name="descript" placeholder="Description" class="form-control" rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                        <!-- ===                                </div>
                            </div>
                        </div>
=========================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                         <div class="row">
                                         <!-- <div class="input-group col-md-4"><span class="input-group-prepend"><span class="input-group-text"> <i class="fas fa-hourglass-half"></i></span></span>
                                                <input type="number" placeholder="How Many Rooms? eg. 10 " name="" class="form-control" required>
                                            </div> -->
                                         </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <div class="">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                        <!-- ============================================================== -->
                        <!-- end select options  -->
                        <!-- ============================================================== -->
                        <!-- end switch component -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- sidenavbar -->
                    <!-- ============================================================== -->
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                        <div class="sidebar-nav-fixed">
                            <ul class="list-unstyled">
                                <li><a href="#overview" class="active">Overview</a></li>
                                <!-- <li><a href="#basicform">Filling</a></li>
                                <li><a href="#select">Submit</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sidenavbar -->
                    <!-- ============================================================== -->
                </div>
            </div>
<!-- end of inventory -->
<?php
  include("footer.php");
?>