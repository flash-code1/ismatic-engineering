<?php
$web_title = "Services";
include('header.php');
?>
<!-- ========== Hero Cover ========== -->

<div id="home" class="fw-video-hero">

<!-- Video Background -->
<div id="fw-video-one-bg" class="player" 
     data-property="{videoURL:'https://firebasestorage.googleapis.com/v0/b/churaton-6e682.appspot.com/o/videoism.mp4?alt=media&token=5cd3da7f-e133-4d7b-bb3a-ff6a35c5e5128',containment:'.fw-video-hero',autoPlay:true, mute:true, startAt:1, stopAt:36, opacity:1}">
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
                <h5>Research Engineering</h5>
                <h6 class="h-alt">Planning Phase</h6>
                <p>A Technology research company for agriculture and food processing.</p>
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
                <h6 class="h-alt">AI, IoT - Scalability</h6>
                <p>We play a key role in revolutionising Africa’s food processing industry through modern technology.</p>
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
                <img src="wall/original.jpg" alt="Features Image">
              </div>
              <div class="col-lg-6 ft-content-wrapper">
                <h5>Testing & Validation</h5>
                <h6 class="h-alt">Implementation</h6>
                <p>We embrace a culture of continuous improvements, leading to innovation and unrivalled expertise</p>
                <button class="btn-ghost">View More</button>
              </div>
            </div><!-- / .ft-item -->
            </section>

          </div><!-- / .row -->
        </div><!-- / .ft-layout-50 -->
<?php
include('footer.php');
?>