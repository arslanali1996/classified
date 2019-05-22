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
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <!--<div style="box-shadow: #ccc 0px 0px 5px; width: 100%; height: 200px;">-->
              <div class="panel panel-info">
                <div class="panel-heading">Saved Ads</div>
                <div class="panel-body user-ads-panel" style="height:300px; overflow-y: auto;">
                  <div class="item-list">
                    <div class="col-sm-2 no-padding photobox">
                      <div class="add-image">
                        <a href="#"><img src="assets/img/item/img-1.jpg" alt=""></a>
                        <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                      </div>
                    </div>
                    <div class="col-sm-7 add-desc-box">
                        <div class="add-details">
                          <h5 class="add-title"><a href="ads-details.html">CG-125 for sale</a></h5>
                          <div class="info">
                              <!--<span class="add-type">B</span>-->
                              <span class="date">
                                <i class="fa fa-clock"></i>
                                16:22:13 2017-02-29
                              </span> -
                              <span class="category">Electronics</span> -
                              <span class="item-location"><i class="fa fa-map-marker"></i>London</span>
                          </div>
                          <div class="item_desc">
                              <!--<a href="#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>-->
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-3 text-right  price-box">
                        <h2 class="item-price"> $ 320 </h2>
                        <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>
                    </div>
                  </div>

                  <div class="item-list">
                    <div class="col-sm-2 no-padding photobox">
                      <div class="add-image">
                        <a href="#"><img src="assets/img/item/img-1.jpg" alt=""></a>
                        <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                      </div>
                    </div>
                    <div class="col-sm-7 add-desc-box">
                        <div class="add-details">
                          <h5 class="add-title"><a href="ads-details.html">120 yd plot for sale</a></h5>
                          <div class="info">
                              <span class="add-type">B</span>
                              <span class="date">
                                <i class="fa fa-clock"></i>
                                16:22:13 2017-02-29
                              </span> -
                              <span class="category">Electronics</span> -
                              <span class="item-location"><i class="fa fa-map-marker"></i>London</span>
                          </div>
                          <div class="item_desc">
                              <a href="#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-3 text-right  price-box">
                    <h2 class="item-price"> $ 320 </h2>
                    <a class="btn btn-danger btn-sm"><!--<i class="fa fa-certificate"></i>-->
                    <span>Top Ads</span></a>
                    <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>
                    </div>
                  </div>
                </div>
              </div>
            <!--</div>-->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <!--<div style="box-shadow: #ccc 0px 0px 5px; width: 100%; height: 200px;">-->
              <div class="panel panel-info">
                <div class="panel-heading">Your Ads</div>
                <div class="panel-body">Panel Content</div>
              </div>
            <!--</div>-->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <!--<div style="box-shadow: #ccc 0px 0px 5px; width: 100%; height: 200px;">-->
              <div class="panel panel-info">
                <div class="panel-heading">Tolet</div>
                <div class="panel-body">Panel Content</div>
              </div>
            <!--</div>-->
        </div>
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