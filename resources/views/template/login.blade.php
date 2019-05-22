<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="google-signin-client_id" content="66799515000-0d2kponqoel033sq9tlf3um3el8lrqgh.apps.googleusercontent.com">

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
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
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
              <!--<fb:login-button scope="public_profile,email" onlogin="checkFbLogin(res);"></fb:login-button>-->
              
              <form role="form" class="login-form">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" id="sender-email" class="form-control" name="email" placeholder="Username">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>                  
                <div class="checkbox">
                  <input type="checkbox" id="remember" name="rememberme" value="forever" style="float: left;">
                  <label for="remember">Remember me</label>
                </div>
                <button class="btn btn-common log-btn">Submit</button>
              </form>
              <ul class="form-links">
                <li class="pull-left"><a href="signup.html">Don't have an account?</a></li>
                <li class="pull-right"><a href="forgot-password.html">Lost your password?</a></li>
              </ul>

              <div class="hr-divider"><span class="hr-divider-text">OR</span></div>

              <div style="margin-top: 5px;">
                <div class="fb-login-button" data-max-rows="1" data-width="100%" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" scope="public_profile,email" style="width: 100%;"  onlogin="checkFbLogin(res);"></div>
              </div>
              <div style="margin-top: 5px;">
                <div class="g-signin2" data-width="100%" data-onsuccess="onSignIn"></div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End -->
    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      
      <!-- Footer area End -->
      
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
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <script type="text/javascript">
      function statusChangeCallback(data){
        console.log(data);
      }
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if(d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      try{
        window.fbAsyncInit = function(){
          FB.init({
            appId      : '1034455973400995',
            cookie     : true,
            xfbml      : true,
            version    : 'v3.1'
          });
          FB.AppEvents.logPageView();
          FB.getLoginStatus(function(response) {
            checkFbLogin(response)
          });
        };
      }catch(e){
        console.log(e);
      }
      function checkFbLogin(res){
        //res.status == 'connected' ? window.location = '{{ url("/dashboard") }}' : '';
      }
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
      }

      
    </script>
  </body>
</html>