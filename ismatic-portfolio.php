<?php
$web_title = "Portfolio";
include('header.php');
?>

   <!-- ========== Page Title ========== -->

   <header style="margin-top: 70px;" class="page-title pt-large pt-light pt-parallax pt-plax-lg-light" data-stellar-background-ratio="0.4">
          <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>Portfolio</h1>
                  <span class="subheading">Some of our work</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Elements</a></li>
                  <li class="active">Portfolio</li>
                </ol>

              </div>
            </div>
        </header>


        <!-- ========== Portfolio Full Width - 3 Columns ========== -->

        <section class="container-fluid portfolio-layout portfolio-columns-fw">
          <div class="row">
            <header class="sec-heading">
              <h2>Some of our project</h2>
              <span class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing</span>
            </header>
          </div><!-- / .row -->
          
          <!-- Filters -->
          <div class="row">
            <ul id="pfolio-filters" class="portfolio-filters">
              <li class="active"><a href="#" data-filter="*">All</a></li>
              <li><a href="#" data-filter=".webdesing">Webdesign</a></li>
              <li><a href="#" data-filter=".print">Print</a></li>
              <li><a href="#" data-filter=".photo">Photography</a></li>
            </ul>
          </div>

          <div class="row">
            <div id="pfolio">

              <!-- Item 1 -->
              <div class="col-md-4 portfolio-item print">
                <div class="p-wrapper hover-default">
                  <img src="http://placehold.it/990x650/aaa/ccc" alt="Project Example">
                  <div class="p-hover">
                    <div class="p-content">
                      <h4>Project Name</h4>
                      <h6 class="subheading">Sub heading for the project</h6>
                    </div>
                  </div>
                  <a href="portfolio-single-1.html" class="open-btn"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 2 -->
              <div class="col-md-4 portfolio-item webdesing photo">
                <div class="p-wrapper hover-default">
                  <img src="http://placehold.it/990x650" alt="Project Example">
                  <div class="p-hover">
                    <div class="p-content">
                      <h4>Project Name</h4>
                      <h6 class="subheading">Sub heading for the project</h6>
                    </div>
                  </div>
                  <a href="portfolio-single-1.html" class="open-btn"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 3 -->
              <div class="col-md-4 portfolio-item photo print">
                <div class="p-wrapper hover-default">
                  <img src="http://placehold.it/990x650/aaa/ccc" alt="Project Example">
                  <div class="p-hover">
                    <div class="p-content">
                      <h4>Project Name</h4>
                      <h6 class="subheading">Sub heading for the project</h6>
                    </div>
                  </div>
                  <a href="portfolio-single-1.html" class="open-btn"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 4 -->
              <div class="col-md-4 portfolio-item webdesing print">
                <div class="p-wrapper hover-default">
                  <img src="http://placehold.it/990x650" alt="Project Example">
                  <div class="p-hover">
                    <div class="p-content">
                      <h4>Project Name</h4>
                      <h6 class="subheading">Sub heading for the project</h6>
                    </div>
                  </div>
                  <a href="portfolio-single-1.html" class="open-btn"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 5 -->
              <div class="col-md-4 portfolio-item webdesing">
                <div class="p-wrapper hover-default">
                  <img src="http://placehold.it/990x650/aaa/ccc" alt="Project Example">
                  <div class="p-hover">
                    <div class="p-content">
                      <h4>Project Name</h4>
                      <h6 class="subheading">Sub heading for the project</h6>
                    </div>
                  </div>
                  <a href="portfolio-single-1.html" class="open-btn"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

              <!-- Item 6 -->
              <div class="col-md-4 portfolio-item photo print webdesing">
                <div class="p-wrapper hover-default">
                  <img src="http://placehold.it/990x650" alt="Project Example">
                  <div class="p-hover">
                    <div class="p-content">
                      <h4>Project Name</h4>
                      <h6 class="subheading">Sub heading for the project</h6>
                    </div>
                  </div>
                  <a href="portfolio-single-1.html" class="open-btn"><i class="fa fa-expand"></i></a>
                </div>
              </div><!-- / .portfolio-item -->

            </div><!-- / #pfolio -->
          </div><!-- / .row -->
        </section><!-- / .portfolio-columns-fw -->



<?php 
include('footer.php');
?>