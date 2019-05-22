<!DOCTYPE html>
<html lang="en">
  <head>
    @include('template.user.head')
  </head>
  <body>  
    <!-- Header Section Start -->
    <div class="header">    
      @include('template.user.navigation')
    </div>
    
    
    <!-- end intro section -->
    <div class="wrapper">
      <div class="container-fluid">
        <form>
          <select class="form-control">
            <option value="">Category</option>
            <option value=""></option>
            <option></option>
          </select>
          <input type="text" name="">
        </form>
      </div>
    </div>

    <!-- Counter Section Start -->
    <!-- Counter Section End -->

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
                <p>All copyrights reserved @ 2016 - Designed by <a rel="nofollow" href="#">Arslan Ali</a></p>
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
  </body>
</html>