<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE 8]><html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <title>Chongqing - Chinese Restaurant</title>
  <meta name="description" content="Responsive Restaurant HTML Template" />
  <meta name="keywords" content="responsive html template, restaurant, cafe, bootstrap 3.0, css, jquery" />
  <meta name="author" content="8Guild" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!--Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Marmelad' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <!--Bootstrap 3.0.3-->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <!--Icons Fonts-->
  <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
  <!--Animations-->
  <link href="css/animate-custom.css" rel="stylesheet" type="text/css">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <!--Google Maps API-->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <!--Modernizr-->
  <script src="js/libs/modernizr.custom.js"></script>
  <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="js/plugins/respond.min.js"></script>
      <![endif]-->
    </head>

    <!--Body-->
    <body>

     <!-- Preloader -->
     <div id="preloader">
      <div id="status">
        <img class="svg" src="img/logo-big.svg" width="133" height="120" alt="Eattie"/>
        <img class="png" src="img/logo-big.png" width="133" height="120" alt="Eattie"/>
        <div id="fountainG">
          <div id="fountainG_1" class="fountainG"></div>
          <div id="fountainG_2" class="fountainG"></div>
          <div id="fountainG_3" class="fountainG"></div>
          <div id="fountainG_4" class="fountainG"></div>
          <div id="fountainG_5" class="fountainG"></div>
          <div id="fountainG_6" class="fountainG"></div>
          <div id="fountainG_7" class="fountainG"></div>
          <div id="fountainG_8" class="fountainG"></div>
        </div>
      </div>
    </div>

    @yield('content')
    

    <!--Footer-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2">
            <div class="footer-logo"></div>
          </div>
          <div class="col-lg-5 col-md-5">
            <div class="footer-contacts">
              <h3>contacts</h3>
              <div class="group">
                <i class="fa fa-map-marker"></i>
                <p>4120 Lenox Avenue, New York, NY, 10035 76 Saint<br/>Nicholas Avenue</p>
              </div>
              <div class="group">
                <i class="fa fa-mobile"></i>
                <p>+48 543765234</p>
              </div>
              <div class="group">
                <i class="fa fa-envelope"></i>
                <p>eattie@mail.com</p>
              </div>
              <div class="group last">
                <i class="fa fa-clock-o"></i>
                <p>Open 11am-11pm Mon-Wed; 11am-1am Thur-Sat;<br/>noon-midnight Sun</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5">
            <h3>subscribe for our news</h3>
            <form class="subscribe-form group" method="post" role="form">
              <div class="row">
                <div class="col-lg-7 col-md-7 form-group">
                  <input class="form-control" type="email" name="email" placeholder="enter your email" required>
                </div>
                <div class="col-lg-5 col-md-5 form-group">
                  <button type="submit" class="btn btn-primary" name="subscribe">subscribe</button>
                </div>
              </div>
            </form>
            <h3>find us on social networks</h3>
            <div class="social-bar">
              <a href="#" class="fa fa-instagram tooltipped" title="Instagram"></a>
              <a href="#" class="fa fa-vimeo-square tooltipped" title="Vimeo"></a>
              <a href="#" class="fa fa-youtube-square tooltipped" title="Youtube"></a>
              <a href="#" class="fa fa-tumblr-square tooltipped" title="Tumblr"></a>
              <a href="#" class="fa fa-facebook-square tooltipped" title="Facebook"></a>
              <a href="#" class="fa fa-linkedin-square tooltipped" title="LinkedIn"></a>
              <a href="#" class="fa fa-pinterest-square tooltipped" title="Pinterest"></a>
              <a href="#" class="fa fa-google-plus-square tooltipped" title="Google+"></a>
            </div>
          </div> 
        </div>
        <div class="copyright row">
          <div class="col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2">
            <p>&copy; Eattie. All Rights Reserved. Designed by <a href="http://8guild.com/" target="_blank">8Guild</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  </div><!--Close Wrapper-->

  <!--Javascript (jQuery)-->
  <script src="js/libs/jquery-1.10.2.min.js"></script>
  <script src="js/libs/jquery.easing.1.3.js"></script>
  <script src="js/plugins/bootstrap.min.js"></script>
  <script src="js/plugins/jquery.touchSwipe.min.js"></script>
  <script src="js/plugins/jquery.cycle.min.js"></script>
  <script src="js/plugins/waypoints.min.js"></script>
  <script src="js/plugins/waypoints-sticky.min.js"></script>
  <script src="js/plugins/datepicker.min.js"></script>
  <script src="js/plugins/timepicker.min.js"></script>
  <script src="js/plugins/jquery.validate.min.js"></script>
  <script src="js/scripts-main.js"></script>

</body><!--Close Body-->
</html>
