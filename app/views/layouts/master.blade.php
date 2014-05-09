<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>House Honey</title>

    <!-- font-awesome -->
    <link href="/bs-banzhow/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 7]>
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <![endif]-->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="/bs-banzhow/css/bootstrap.css" rel="stylesheet">

    <!-- custom CSS -->
    <link href="/bs-banzhow/css/style.css" rel="stylesheet">
    <!--[if lte IE 8]>
    <link href="css/ie8.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 7]>
    <link href="css/ie7.css" rel="stylesheet">
    <![endif]-->

    <!-- JavaScript -->
    <script type="text/javascript" src="/bs-banzhow/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="/bs-banzhow/js/bootstrap.js"></script>
    <script type="text/javascript" src="/bs-banzhow/js/plugins.js"></script>
    <!--[if lte IE 7]>
    <script type="text/javascript" src="js/boxsizing/jquery.boxsizing.js"></script> 
    <![endif]-->
    <script type="text/javascript" src="/bs-banzhow/js/banzhow.js"></script>
  </head>

 
 
  <body>
    

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/bs-banzhow/index.html">The House Honey</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/bs-banzhow/index.html">Home</a></li>
            <li><a href="/bs-banzhow/services.html">Services</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Shop  <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="{{{ action('HomeController@showWineGlasses') }}}">Wine Glasses</a></li>
                <li><a href="/bs-banzhow/portfolio-2-col.html">2 Column Portfolio</a></li>
                <li><a href="/bs-banzhow/portfolio-3-col.html">3 Column Portfolio</a></li>
                <li><a href="/bs-banzhow/portfolio-item.html">Single Portfolio Item</a></li>
              </ul>
            </li>
            <li><a href="http://www.househoney.com" target="_blank">My Blog</a></li>

          
            <li><a href="/bs-banzhow/contact.html">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

  </body>
</html>


@yield('body')

<footer>
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-3">
            <a class="footer-brand" href="index.html">The House Honey</a>
            <p>She's that girl that makes you want to rush home.  She is that thought that gets you tickled and makes you smile.  She is that touch that calms you.  She is everything good in this world.</p>
            <ul class="list-inline list-unstyled social-networks">
              <li>
                <a href="http://www.facebook.com/househoneydesigns">
                  <div class="icon-social icon-social-facebook normal">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-facebook"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="@House_Honey">
                  <div class="icon-social icon-social-twitter normal">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-twitter"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="icon-social icon-social-google-plus normal">
                    <i class="fa fa-google-plus"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-google-plus"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="icon-social icon-social-linkedin normal">
                    <i class="fa fa-linkedin"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-linkedin"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="http://www.pinterest.com/House_Honey/">
                  <div class="icon-social icon-social-pinterest normal">
                    <i class="fa fa-pinterest"></i>
                  </div>
                  <div class="icon-social hover">
                    <i class="fa fa-pinterest"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3">
            <h3>CONTACT</h3>
            <address>
              <i class="fa fa-map-marker"></i> San Antonio, TX 78253<br>
              <i class="fa fa-phone"></i> (210) 454-2139<br>
              <i class="fa fa-envelope"></i> heather@househoney.com
            </address>
          </div>
          
          <div class="col-lg-3 col-md-3">
            <h3>LATEST TWEETS</h3>
            <ul class="latest-tweets">
              <li>
                <i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing
              </li>
              <li>
                <i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-3">
            <h3>NEWSLETTER</h3>
            <p>Type your email address below and subscribe to our newsletter</p>
            <div class="input-group">
              <input type="text" placeholder="Email" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Go!</button>
              </span>
            </div><!-- /input-group -->
          </div>
              </div><!-- /.row -->
            </div><!-- /.container -->      
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->

  
  </footer>

    <div class="footer-after">
      <div class="container">
        <div class="row">
          <p class="col-md-10">©2014 All rights reserved. <a href="kenpriest.me" alt="kenpriest.me">Designed by Ken Priest - kenpriest.me</a></p>
          <p class="col-md-2 legal"><a href="#" rel="nofollow">Legal Notice</a></p>
        </div><!-- /.row -->
      </div>
    </div>


  </body>
</html>