<?php
$web_title = "Blog";
include('header.php');
?>



        <!-- ========== Page Title ========== -->

        <header style="margin-top: 60px;" class="page-title pt-light pt-plax-md-light" data-stellar-background-ratio="0.4">
          <div class="bg-overlay">
            <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>Blog</h1>
                  <span class="subheading">Latest blog posts</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Blog</li>
                </ol>

              </div>
            </div>
          </div>
        </header>


        <!-- ========== Blog - 3 Columns ========== -->

        <div id="blog" class="section container blog-columns">
          <div class="row ws-s">

            <!-- Blog Post 1 -->
            <?php 
                include("super/functions/db/connect.php");
                $select_blog = mysqli_query($connection, "SELECT * FROM blog ORDER BY id DESC");
                while ($row = mysqli_fetch_array($select_blog)) {
                  ?>
            <div class="col-lg-6 col-md-6 mb-sm-50 ws-s">
              <div class="blog-post">

                <!-- Image -->
                <a href="#" class="post-img"><img src="super/functions/blog/<?php echo $row["img"];?>" width="990" height="715" alt="Blog Post 1"></a>

                <div class="bp-content">
                  
                  <!-- Meta data -->
                  <div class="post-meta">
                    <a href="#" class="post-date">
                      <i class="fa fa-calendar-o"></i>
                      <span><?php echo $row["date"];?></span>
                    </a>
                    <!-- <a href="#" class="post-comments">
                      <i class="fa fa-comments-o"></i>
                      <span>12</span>
                    </a> -->
                  </div><!-- / .meta -->

                  <!-- Post Title -->
                  <a href="#" class="post-title"><h4><?php echo $row["heading"];?></h4></a>
                    <p><?php echo $row["sub_heading"]; ?></p>

                  <!-- Blurb -->
                  <p><?php echo $row["content"]; ?></p>

                  <!-- Link -->
                  <!-- <a href="#" class="btn btn-small">Read More</a> -->

                </div><!-- / .bp-content -->

              </div><!-- / .blog-post -->
            </div><!-- / .col-lg-4 -->
            <?php
                }
                ?>

        
                        
          </div><!-- / .row -->

          
          <!-- Pagination -->
          <!-- <div class="row">
            <nav class="blog-pagination text-center">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">7</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div> -->
          <!-- / .row -->
        </div><!-- / .blog-columns -->
        <hr>
        


        <!-- ========== Sidebar ========== -->

        <aside class="container section sidebar">
          <div class="row">

            <!-- Recent Posts - Widget 
            <div class="col-md-3 mb-sm-100 recent-posts-widget">
              <h5 class="header-widget">Recent Posts</h5>

              Item 1 
              <div class="widget-item">
                <a href="#"><h6 class="h-alt">Blog Post Example</h6></a>
                <span>by <a href="#">Joel Fischer</a> / <a href="#">June 23</a></span>
              </div>

               Item 2 
              <div class="widget-item">
                <a href="#"><h6 class="h-alt">Another Blog Post Example</h6></a>
                <span>by <a href="#">Joel Fischer</a> / <a href="#">June 23</a></span>
              </div>

              Item 3 
              <div class="widget-item">
                <a href="#"><h6 class="h-alt">Blog Post Example</h6></a>
                <span>by <a href="#">Joel Fischer</a> / <a href="#">June 23</a></span>
              </div>

            </div>
             / .recent-posts-widget -->


            <!-- Categories - Widget -->
            <div class="col-md-3 mb-sm-100 categories-widget">
              <h5 class="header-widget">Categories</h5>

              <!-- Item 1 -->
              <div class="widget-item">
                <a href="#">Engineering - <span>15</span></a>
              </div>

              <!-- Item 2 -->
              <div class="widget-item">
                <a href="#">Artificial Intelligence - <span>6</span></a>
              </div>

              <!-- Item 3 -->
              <div class="widget-item">
                <a href="#">Programming - <span>12</span></a>
              </div>

              <!-- Item 4 -->
              <div class="widget-item">
                <a href="#">Human Machine Interface - <span>3</span></a>
              </div>

            </div><!-- / .categories-widget -->


            <!-- Tags - Widget -->
            <div class="col-md-3 mb-sm-100 tags-widget">
              <h5 class="header-widget">Tags</h5>
              <ul class="tag-list">
                <li><a href="#">Engineering</a></li>
                <li><a href="#">Industry</a></li>
                <li><a href="#">HMI</a></li>
                <li><a href="#">Programming</a></li>
                <li><a href="#">AI</a></li>
                <li><a href="#">Robotics</a></li>
              </ul>
            </div><!-- / .tags-widget -->



          </div><!-- / .row -->
        </aside><!-- / .sidebar -->





<?php
include('footer.php');
?>