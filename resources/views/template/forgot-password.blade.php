<!DOCTYPE html>
<html lang="en">
  <head>
    @include('template.head')
  </head>
  <body>  
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.html"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="signup.html"><i class="lnr lnr-user"></i> Signup</a></li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
    </div>
    <!-- Header Section End -->
    <!-- Page Header Start -->
    <div class="page-header" style="background: url('assets/img/banner1.jpg'); ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Login to account</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
              <div class="page-login-form box">
                <h3>Forgot Password</h3>
                <form role="form" class="login-form" action="{{ url('/forgot-password/') }}">
                  <div class="form-group is-empty">
                    <div class="input-icon">
                     <i class="icon fa fa-user"></i>
                     <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
                    </div>
                   <span class="material-input"></span>
                  </div>
                  <button class="btn btn-common log-btn">Send me my Password</button>
                </form>
                <ul class="form-links">
                  <li class="pull-left"><a href="{{ url('/signup/') }}">Don't have an account?</a></li>
                  <li class="pull-right"><a href="{{ url('/login/') }}">Back to Login</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 
  
    <!-- Footer Section Start -->
    <footer>      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info pull-left">
                <p>All copyrights reserved @ 2016 - Design & Development by <a rel="nofollow" href="http://graygrids.com">Graygrids</a></p>
              </div>              
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
                <a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
                <a class="youtube" target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                <a class="google-plus" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->
    </footer>
    <!-- Footer Section End -->
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Main JS  -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/material.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/material-kit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jasny-bootstrap.min.js') }}"></script>
  </body>
</html>