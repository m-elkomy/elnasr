<div class="header block" id="home">
    <div class="main">
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="links">
                            <a href="">01064880553</a> |
                            <a href="">support@domain.com</a>
                            <a href="?lang=en" class="lang en btn btn-success">En</a>
                            <a href="?lang=ar" class="lang ar btn btn-success">Ar</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="icons">
                            <i class="fa fa-facebook fa-lg"></i>
                            <i class="fa fa-twitter fa-lg"></i>
                            <i class="fa fa-linkedin fa-lg"></i>
                            <i class="fa fa-dribbble fa-lg"></i>
                            <i class="fa fa-pinterest fa-lg"></i>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="my-navbar" id="my-navbar">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myapp-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><?php echo lang('ELNASR')?></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="myapp-nav">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home"  class="active" data-scroll="home"><?php echo lang('HOME')?></a></li>
                            <li><a href="#services" data-scroll="services"><?php echo lang('SERVICES')?></a></li>
                            <li><a href="#about" data-scroll="about"><?php echo lang('ABOUT')?></a></li>
                            <li><a href="#about" data-scroll="areas"><?php echo lang('AREAS')?></a></li>
                            <li><a href="#about" data-scroll="testim"><?php echo lang('TESTIMONIALS')?></a></li>
                            <li><a href="#features" data-scroll="features"><?php echo lang('FEATURES')?></a></li>
                            <li><a href="#clients" data-scroll="clients"><?php echo lang('CLIENTS')?></a></li>
                            <li><a href="#contact" data-scroll="contact"><?php echo lang('CONTACT')?></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
<div class="myslider">
    <!-- start carousel slider -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo $image?>slider1.jpg" alt="...">
                <div class="carousel-caption">
                    <h2 class="h1 wow zoomIn" data-wow-duration="3s" data-wow-delay="1s"><?php echo lang('Bringing Together')?></h2>
                    <p class="lead wow bounceInLeft" data-wow-duration="3s" data-wow-delay="2s"><?php echo lang('Experitse &amp; Knowledge &amp; Industry')?></p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $image?>slider2.jpg" alt="...">
                <div class="carousel-caption">
                    <h2 class="h1 wow zoomIn"><?php echo lang('Bringing Together')?></h2>
                    <p class="lead wow bounceInLeft" data-wow-duration="3s" data-wow-delay="2s"><?php echo lang('Experitse &amp; Knowledge &amp; Industry')?></p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $image?>slider3.jpg" alt="...">
                <div class="carousel-caption">
                    <h2 class="h1 wow zoomIn" data-wow-duration="3s" data-wow-delay="1s"><?php echo lang('Bringing Together')?></h2>
                    <p class="lead wow bounceInLeft" data-wow-duration="3s" data-wow-delay="2s"><?php echo lang('Experitse &amp; Knowledge &amp; Industry')?></p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo $image?>slider4.jpg" alt="...">
                <div class="carousel-caption">
                    <h2 class="h1 wow zoomIn" data-wow-duration="3s" data-wow-delay="1s"><?php echo lang('Bringing Together')?></h2>
                    <p class="lead wow bounceInLeft" data-wow-duration="3s" data-wow-delay="2s"><?php echo lang('Experitse &amp; Knowledge &amp; Industry')?></p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="clearfix"></div>