<?php
$web_title = "Services";
include('header.php');
?>
<!-- ========== Hero Cover ========== -->

<div id="home" class="fw-video-hero">

<!-- Video Background -->
<div id="fw-video-one-bg" class="player" 
     data-property="{videoURL:'https://youtu.be/SuJGXTFDqj8',containment:'.fw-video-hero',autoPlay:true, mute:true, startAt:20, stopAt:36, opacity:1}">
</div>

<div class="bg-overlay">
                  
  <!-- Hero Content -->
  <div class="hero-content-wrapper">
    <div class="hero-content">
    <h1 class="hero-lead wow fadeInLeft" data-wow-duration="2s">Creativity<br> & Experience</h1>
      <h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Research, Innovation  &amp; Testing</h4>
      <a href="#Research" class="btn btn-light wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Learn More</a>

    </div>
  </div>

  <!-- Scroller -->
  <!-- <a href="#about" class="scroller">
    <span class="scroller-text">scroll down</span>
    <span class="linea-basic-magic-mouse"></span>
  </a> -->

</div><!-- / .bg-overlay -->
</div><!-- / .fs-video-hero -->
<!-- Next Grid Straight to Services -->

<!-- ========== Features - Layout 50/50 ========== -->

<div class="container-fluid ft-layout-50">
          <div class="row">
            
          <section id="Research">
            <!-- Feature 1 -->
            <div class="ft-item">
              <div class="col-lg-6 ft-img-wrapper">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/09/32/concept-1868728_960_720.jpg" alt="Features Image">
              </div>
              <div class="col-lg-6 ft-content-wrapper">
                <h5>Research</h5>
                <h6 class="h-alt">Sub-heading content goes here</h6>
                <p>Content on description about Research, explaining in details as part of services the company offer.</p>
                <button class="btn-ghost">View More</button>
              </div>
            </div><!-- / .ft-item -->
            
            </section>
          </div>
          <br>
            <br>
            <br>
            <br>
          <div class="row">

            

            <section id="innovation">
            <!-- Feature 2 -->
            <div class="ft-item">
              <div class="col-lg-6 ft-content-wrapper">
                <h5>Innovation</h5>
                <h6 class="h-alt">Sub-heading content goes here</h6>
                <p>Content on description about Innovation, explaining in details as part of services the company offer.</p>
                <button class="btn-ghost">View More</button>
              </div>
              <div class="col-lg-6 ft-img-wrapper">
                <img src="https://cdn.pixabay.com/photo/2014/12/08/21/25/business-561388_960_720.jpg" alt="Features Image">
              </div>
            </div><!-- / .ft-item -->
            </section>
            
          </div>
          <br>
            <br>
            <br>
            <br>

          <div class="row">

            <section id="testingandvalidation">
            <!-- Feature 3 -->
             <div class="ft-item">
              <div class="col-lg-6 ft-img-wrapper">
                <img src="https://cdn.pixabay.com/photo/2017/03/27/11/19/welding-2178127_960_720.jpg" alt="Features Image">
              </div>
              <div class="col-lg-6 ft-content-wrapper">
                <h5>Testing & Validation</h5>
                <h6 class="h-alt">Sub-heading content goes here</h6>
                <p>Content on description about Research, explaining in details as part of services the company offer.</p>
                <button class="btn-ghost">View More</button>
              </div>
            </div><!-- / .ft-item -->
            </section>

          </div><!-- / .row -->
        </div><!-- / .ft-layout-50 -->
<?php
include('footer.php');
?>