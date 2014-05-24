@extends('layouts.master')


@section('body')

    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('/bs-banzhow/img/slide/slide1.png');"></div>
            <div class="carousel-caption">
              <h2>House Honey Makes You Want to Rush Home!</h2>
              <a href="#" class="button"></a>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('/bs-banzhow/img/slide/slide2.png');"></div>
            <div class="carousel-caption">
              <h2>House Honey Makes You Smile When You Think of Her!</h2>
              <a href="#" class="button">SEE MORE</a>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('/bs-banzhow/img/slide/slide3.png');"></div>
            <div class="carousel-caption">
              <h2>House Honey is Every Guys Dream Girl!</h2>
              <a href="#" class="button"></a>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
    </div>

    <div class="section">

      <div class="container">

        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-glass"></i>
            </div>

            <div class="block-body">
              <h2>Glasses</h2>
              <div class="line-subtitle"></div>
              <p>Wine glasses, beer mugs, Vino-to-Go and many more styles.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-group"></i>
            </div>

            <div class="block-body">
              <h2>Shirts</h2>
              <div class="line-subtitle"></div>
              <p>I have a wide variety of shirt styles for you to choose from or you are more than welcome to provide your own.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="block-icon">
              <i class="fa fa-scissors"></i>
            </div>

            <div class="block-body">
              <h2>Customization</h2>
              <div class="line-subtitle"></div>
              <p>If you can think it up, I can make it up!</p>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->

    <div class="section-colored home">

      <div class="container">

        <div class="row">
          <div class="col-md-9 col-sm-8">
            <h2>I will be happy to help you figure out a solution for your needs </h2>
          </div>
          <div class="col-md-3 col-sm-4">
            <a href="mailto:heather@househoney.com" class="btn btn-danger btn-lg">Contact me</a>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section-colored -->

    <div class="section" id="recent-projects" style="position: relative;">

      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-title">Recent Creations</h2>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="/bs-banzhow/portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>The House Honey</h3>
                <small class="text-muted">
                  Plastic tumblers with screw on lids with straws. Choose and existing design or I can customize them for you.  
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="/bs-banzhow/img/realPink.jpg" alt="portfolio 1">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="/bs-banzhow/portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>The House Honey</h3>
                <small class="text-muted">
                  I can embroider your personal items with limitless designs.  I also offer a wide variety of apparel and baby items for you to choose from. 
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="/bs-banzhow/img/christmas-mickey.jpg" alt="portfolio 2">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="/bs-banzhow/portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>The House Honey</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="/bs-banzhow/img/fabAtForty.jpg" alt="portfolio 3">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="/bs-banzhow/portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>The House Honey</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="/bs-banzhow/img/fua-wine.jpg" alt="portfolio 4">
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="/bs-banzhow/portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>The House Honey</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="/bs-banzhow/img/yogaPantsWine2.jpg" alt="portfolio 5">
            </a>
           </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <a href="/bs-banzhow/portfolio-item.html" class="link-portfolio">
              <div class="overlay-portfolio">
                <h3>The House Honey</h3>
                <small class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing.
                </small>
              </div><!-- /.overlay-portfolio -->
              <img class="img-responsive img-home-portfolio" src="/bs-banzhow/img/decalPinkMono3.jpg" alt="portfolio 6">
            </a>
          </div>


          </div><!-- /.row -->

        </div><!-- /.container -->

      </div><!-- /.container -->

    </div><!-- /.section-colored -->



    <div class="section-colored">

      <div class="container">
        <h3 class="section-title text-center">Some of My Clients</h3>
  
        <div class="container clients">

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <a href="#"><img class="img-responsive" src="/bs-banzhow/img/freedom-cup-smaller.png" alt="Freedom Cup"></a>
            </div>
      	  </div>
      	</div>
      </div>
    </div>


@stop


