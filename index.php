<?php
    $pagetitle = 'Home Page';
    include 'init.php';

    //check that user coming through post request
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //receive data from form
        $user      = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $email     = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $cellphone = filter_var($_POST['cellphone'],FILTER_SANITIZE_NUMBER_INT);
        $message   = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
        //errors array
        $formerrors = array();
        if(strlen($user) < 5){
            $formerrors[] = 'User Name Can Not Be Less Than 5 Characters';
        }
        if(empty($email)){
            $formerrors[] = 'Email Can Not Be Empty';
        }
        if(empty($cellphone)){
            $formerrors[] = 'Cell Phone Can Not Be Empty';
        }
        if(empty($message) && strlen($message)<10){
            $formerrors[] = 'Message Can Not Be Empty Or Can Not Be Less Than 10 Characters';
        }
        //mail function
        if(empty($formerrors)){
            $to = 'ahmed@elnasr.com';
            $header = 'From: ' . $email . '\r\n';
            $subject = 'Request';
            mail($to,$subject,$message,$header);
            $user = '';
            $email = '';
            $message = '';
            $cellphone = '';
            $success = '<div class="alert alert-success">We Recived Your Message Thanks For Contacting Us</div>';
        }

    }
?>

<!-- start our works -->
<div class="our-services padding block" id="services">
<div class="container">
    <div class="head text-center info">
        <h2 class="h1"><?php echo lang('SERVICES');?></h2>
        <p class="lead"><?php echo lang('Creative and interactive Business Agency.'); ?></p>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <h3 class="title"><?php echo lang('WEB DESIGN')?></h3>
                <div class="service-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <p class="description">
                    <?php echo lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta semper ipsum. Vivamus pulvinar purus quis orci.') ?>
                </p>
                <a href="#" class="read"><?php echo lang('READ MORE')?></a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <h3 class="title"><?php echo lang('WEB DEVELOPEMENT')?></h3>
                <div class="service-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <p class="description">
                    <?php echo lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta semper ipsum. Vivamus pulvinar purus quis orci.') ?>
                </p>
                <a href="#" class="read"><?php echo lang('READ MORE')?></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <h3 class="title"><?php echo lang('WEB DEVELOPEMENT')?></h3>
                <div class="service-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <p class="description">
                    <?php echo lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta semper ipsum. Vivamus pulvinar purus quis orci.') ?>
                </p>
                <a href="#" class="read"><?php echo lang('READ MORE')?></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <h3 class="title"><?php echo lang('WEB DEVELOPEMENT')?></h3>
                <div class="service-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <p class="description">
                    <?php echo lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta semper ipsum. Vivamus pulvinar purus quis orci.') ?>
                </p>
                <a href="#" class="read"><?php echo lang('READ MORE')?></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end our works -->

<!-- start about us -->
<div class="about-us padding block" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="about-img">
                    <img src="<?php echo $image?>slider1.jpg"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-head info">
                    <h2 class="h1"><?php echo lang('ABOUT US')?></h2>
                    <p><?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.') ?></p>
                </div>
                <div class="about-info">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><?php echo lang('HISTROY')?></a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><?php echo lang('MISSION')?></a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><?php echo lang('VISION')?></a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><?php echo lang('AWARDS')?></a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h3><?php echo lang('HISTORY') ?></h3>
                                <p><?php echo lang('histroy Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.') ?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <h3><?php echo lang('MISSION')?></h3>
                                <p><?php echo lang('histroy Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.') ?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <h3><?php echo lang('VISION')?></h3>
                                <p><?php echo lang('histroy Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.') ?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <h3><?php echo lang('AWARDS')?></h3>
                                <p><?php echo lang('histroy Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.') ?></p>
                            </div>
                        </div>
                    </div>
                    <button class="btn"><?php echo lang('CONTACT US')?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about us -->
<!-- start our areas -->
<div class="our-areas padding block" id="areas">
    <div class="container">
        <div class="head text-center info">
            <h2 class="h1"><span class="hidden-xs">Our</span> <?php echo lang('AREAS')?></h2>
            <p class="lead"><?php echo lang('Creative and interactive Business Agency.')?></p>
        </div>
        <ul class="shuffle">
            <li class="active" data-filter="all"><?php echo lang('ALL')?></li>
            <li data-filter=".mobile"><?php echo lang('MOBILE')?></li>
            <li data-filter=".coffee"><?php echo lang('COFFEE')?></li>
            <li data-filter=".video"><?php echo lang('VIDEOS')?></li>
        </ul>
        <div class="clearfix"></div>
        <div class="gallery">
            <div class="rows">
                <div class="mix mobile">
                    <div class="over"><?php echo lang('VIEW MORE')?></div>
                    <img src="<?php echo $image?>c2.jpg" class="img-responsive img-thumbnail" alt="imagep1">
                </div>
                <div class="mix coffee">
                    <div class="over"><?php echo lang('VIEW MORE')?></div>
                    <img src="<?php echo $image?>c2.jpg" class="img-responsive img-thumbnail" alt="imagep2">
                </div>
                <div class="mix coffee">
                    <div class="over"><?php echo lang('VIEW MORE')?></div>
                    <img src="<?php echo $image?>c3.jpg" class="img-responsive img-thumbnail" alt="imagep3">
                </div>
            </div>
            <div class="rows">
                <div class="mix mobile">
                    <div class="over"><?php echo lang('VIEW MORE')?></div>
                    <img src="<?php echo $image?>c3.jpg" class="img-responsive img-thumbnail" alt="imagep4">
                </div>
                <div class="mix video">
                    <div class="over"><?php echo lang('VIEW MORE')?></div>
                    <img src="<?php echo $image?>c5.jpeg" class="img-responsive img-thumbnail" alt="imagep5">
                </div>
                <div class="mix video">
                    <div class="over"><?php echo lang('VIEW MORE')?></div>
                    <img src="<?php echo $image?>c6.jpg" class="img-responsive img-thumbnail" alt="imagep6">
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
<!-- end our areas -->

<!-- start testimonials -->
<div class="testimonials padding block" id="testim">
<div class="container">
    <div class="head text-center info">
        <h2 class="h1"><?php echo lang('CLIENTS SAY')?></h2>
        <p class="lead"><?php echo lang('Creative and interactive Business Agency.')?></p>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="testimonial-bg">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="description">
                            <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                        </p>
                        <div class="pic">
                            <img src="<?php echo $image?>avatar.png" alt="">
                        </div>
                        <h3 class="title"><?php echo lang('Williamson')?></h3>
                        <span class="post"><?php echo lang('Web Developer')?></span>
                    </div>
                    <div class="testimonial">
                        <p class="description">
                            <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                        </p>
                        <div class="pic">
                            <img src="<?php echo $image?>avatar.png" alt="">
                        </div>
                        <h3 class="title"><?php echo lang('Williamson')?></h3>
                        <span class="post"><?php echo lang('Web Developer')?></span>
                    </div>
                    <div class="testimonial">
                        <p class="description">
                            <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                        </p>
                        <div class="pic">
                            <img src="<?php echo $image?>avatar.png" alt="">
                        </div>
                        <h3 class="title"><?php echo lang('Williamson')?>,</h3>
                        <span class="post"><?php echo lang('Web Developer')?></span>
                    </div>
                    <div class="testimonial">
                        <p class="description">
                            <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                        </p>
                        <div class="pic">
                            <img src="<?php echo $image?>avatar.png" alt="">
                        </div>
                        <h3 class="title"><?php echo lang('Williamson')?></h3>
                        <span class="post"><?php echo lang('Web Developer')?></span>
                    </div>
                </div>
                <div class="owl-controls clickable">
                    <div class="owl-buttons">
                        <div class="direct">
                            <span class="owl-prev"></span>
                            <span class="owl-next"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end testimonials -->

<!-- start our features -->
<div class="features padding block" id="features">
    <div class="container">
        <div class="head text-center info">
            <h2 class="h1"><?php echo lang('FEATURES')?></h2>
            <p class="lead"><?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?></p>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="featBox">
                    <div class="feat-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h3 class="title"><?php echo lang('Profession Team')?></h3>
                    <p class="description">
                        <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="featBox">
                    <div class="feat-icon">
                        <i class="fa fa-cube"></i>
                    </div>
                    <h3 class="title"><?php echo lang('Attention To Details')?></h3>
                    <p class="description">
                        <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="featBox">
                    <div class="feat-icon">
                        <i class="fa fa-history"></i>
                    </div>
                    <h3 class="title"><?php echo lang('Easy Customization')?></h3>
                    <p class="description">
                        <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="featBox">
                    <div class="feat-icon">
                        <i class="fa fa-smile-o"></i>
                    </div>
                    <h3 class="title"><?php echo lang('Client Orientation')?></h3>
                    <p class="description">
                        <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="featBox">
                    <div class="feat-icon">
                        <i class="fa fa-headphones"></i>
                    </div>
                    <h3 class="title"><?php echo lang('Good Histroy Impact')?></h3>
                    <p class="description">
                        <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="featBox">
                    <div class="feat-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <h3 class="title"><?php echo lang('Customer Support')?></h3>
                    <p class="description">
                        <?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end our features -->
<!-- start our team -->
<div class="our-team padding">
    <div class="container">
        <div class="head text-center info">
            <h2 class="h1"><span class="hidden-xs">Our</span> <?php echo lang('TEAM')?></h2>
            <p class="lead"><?php echo lang('Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.')?></p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <img src="<?php echo $image?>team1.jpg" class="img-thumbnail img-responsive">
                    <div class="box-content">
                        <div class="inner-content">
                            <h3 class="title"><?php echo lang('Hany')?></h3>
                            <span class="post"><?php echo lang('Web Developer')?></span>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <img src="<?php echo $image?>team2.jpg" class="img-thumbnail img-responsive">
                    <div class="box-content">
                        <div class="inner-content">
                            <h3 class="title"><?php echo lang('Samir')?></h3>
                            <span class="post"><?php echo lang('Web Designer')?></span>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <img src="<?php echo $image?>team2.jpg" class="img-thumbnail img-responsive">
                    <div class="box-content">
                        <div class="inner-content">
                            <h3 class="title"><?php echo lang('Moustafa')?></h3>
                            <span class="post"><?php echo lang('Web Designer')?></span>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <img src="<?php echo $image?>team2.jpg" class="img-thumbnail img-responsive">
                    <div class="box-content">
                        <div class="inner-content">
                            <h3 class="title"><?php echo lang('Yousef')?></h3>
                            <span class="post"><?php echo lang('Web Designer')?></span>
                            <ul class="icon">
                                <li><a href="#"><i class="fa fa-facebook fa-xs"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-xs"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-xs"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus fa-xs"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end our team -->
<!-- start success counts -->
<div class="success-counts padding">
    <div class="container">
        <div class="head text-center info">
            <h2 class="h1"><?php echo lang('Success Counts')?></h2>
            <p class="lead"><?php echo lang('Creative and interactive Business Agency.')?></p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div class="counts text-center">
                    <h3>14</h3>
                    <h4><?php echo lang('Works Year')?></h4>
                    <p><?php echo lang('Aliquam sapien est, mollis id mattis id, scelerisque sed dolor. Proin accumsan erat sem, id porta risus dignissim ac.')?></p>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="counts text-center">
                    <h3>14</h3>
                    <h4><?php echo lang('Works Year')?></h4>
                    <p><?php echo lang('Aliquam sapien est, mollis id mattis id, scelerisque sed dolor. Proin accumsan erat sem, id porta risus dignissim ac.')?></p>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="counts text-center">
                    <h3>14</h3>
                    <h4><?php echo lang('Works Year')?></h4>
                    <p><?php echo lang('Aliquam sapien est, mollis id mattis id, scelerisque sed dolor. Proin accumsan erat sem, id porta risus dignissim ac.')?></p>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="counts text-center">
                    <h3>14</h3>
                    <h4><?php echo lang('Works Year')?></h4>
                    <p><?php echo lang('Aliquam sapien est, mollis id mattis id, scelerisque sed dolor. Proin accumsan erat sem, id porta risus dignissim ac.')?></p>
                </div>
            </div>
    </div>
    </div>
</div>
<!-- end success counts -->
<!-- start our-clients -->
<div class="our-clients padding block" id="clients">
    <div class="container text-center">
        <ul class="list-unstyled">
            <li class="col-md-2 col-xs-12"><img src="<?php echo $image?>WWD.png" width="130" height="50" alt="c1"></li>
            <li class="col-md-2 col-xs-12"><img src="<?php echo $image?>reuters.png" width="130" height="50" alt="c2"></li>
            <li class="col-md-2 col-xs-12"><img src="<?php echo $image?>CNN-Logo-grey-.png" width="130" height="50" alt="c3"></li>
            <li class="col-md-2 col-xs-12"><img src="<?php echo $image?>bbc.png" width="130" height="50" alt="c4"></li>
            <li class="col-md-2 col-xs-12"><img src="<?php echo $image?>CNN-Logo-grey-.png" width="130" height="50" alt="c5"></li>
            <li class="col-md-2 col-xs-12"><img src="<?php echo $image?>reuters.png" width="130" height="50" alt="c6"></li>
        </ul>
    </div>
</div>
<!-- end our-clients -->
<!-- start keep in touch -->
<div class="keep-in-touch padding">
    <div class="container">
        <div class="head text-center info">
            <h2 class="h1"><?php echo lang('Keep In Touch')?></h2>
            <p class="lead"><?php echo lang('Creative and interactive Business Agency.')?></p>
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="keep">
                    <div><i class="fa fa-map-signs fa-2x"></i></div>
                    <h3><?php echo lang('Our Location')?></h3>
                    <p><?php echo lang('301 The Greenhouse')?>,<br> <?php echo lang('Custard Factory')?>,<br><?php echo lang('London, E2 8DY')?>..</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="keep">
                    <div><i class="fa fa-envelope fa-2x"></i></div>
                    <h3><?php echo lang('Mail Enquiries')?></h3>
                    <p><a href="">support@domainname.com</a><br><a href="">sales@domainname.com</a></p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="keep">
                    <div><i class="fa fa-phone fa-2x"></i></div>
                    <h3><?php echo lang('Phone Contact')?></h3>
                    <p>+00 (0) 123 456 7890<br>+00 (0) 123 456 7891 (Fax).</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="keep">
                    <div><i class="fa fa-users fa-2x"></i></div>
                    <h3><?php echo lang('Our Partners')?></h3>
                    <p><?php echo lang('Aliquam sapien est, mollis id mattis id, scelerisque sed dolor. Proin accumsan erat sem, id porta risus dignissim ac.')?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end keep in touch -->
<!-- start contact us -->
<div class="contact text-center block" id="contact">
    <div class="fields padding">
        <div class="container">
            <i class="fa fa-headphones fa-5x"></i>
            <h2 class="h1"><?php echo lang('Tell Us What You Feel')?></h2>
            <p class="lead"><?php echo lang('Feel Free To Contact Us')?></p>
            <div class="row">
    <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="col-md-6">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input
                    required="required"
                    id="name"
                    type="text"
                    class="username form-control"
                    name="name"
                    placeholder="<?php echo lang('User Name')?>"
                    value="<?php if(isset($user)){echo $user;} ?>"
                    pattern=".{5,}"
                    title="<?php echo lang('User Name Can Not Be Less Than 5 Characters')?>"
                    autocomplete="off">
            <span class="asterisk">*</span>
        </div>
            <div class="alert alert-danger custom-alert"></div>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input
                    required="required"
                    id="email"
                    type="email"
                    class="email form-control"
                    name="email"
                    value="<?php if(isset($email)){echo $email;} ?>"
                    placeholder="<?php echo lang('Your Personal Email')?>"
                    autocomplete="off">
            <span class="asterisk">*</span>
        </div>
            <div class="alert alert-danger custom-alert"></div>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input
                    minlength="11"
                   required="required"
                    id="cellphone" type="text"
                    class="cellphone form-control"
                    name="cellphone" value="<?php if(isset($cellphone)){echo $cellphone;} ?>"
                    placeholder="<?php echo lang('Your Mobile Number')?>">
            <span class="asterisk">*</span>
        </div>
            <div class="alert alert-danger custom-alert"></div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="textarea fa fa-edit"></i></span>
                <textarea minlength="10" required="required" placeholder="<?php echo lang('Enter Your Message')?>" class="message form-control input-lg" name="message"><?php if(isset($message)){echo $message;} ?></textarea>
                <span class="asterisk">*</span>
            </div>
            <div class="alert alert-danger custom-alert"></div>
            <input type="submit" value="<?php echo lang('Send')?>" class="btn btn-block btn-success"/>
        </div>
    </form>

            </div>
            <div class="formerrors">
                <?php
                    if(isset($formerrors)){
                        foreach ($formerrors as $error){
                            echo '<div class="alert alert-danger alert-dismissable" role="start" >
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span> </button> ' . $error . '</div>';
                        }
                    }

                    if(isset($success)){
                        echo $success;
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- end contact us -->
<!-- start loading screen -->
<section class="loading">
    <div>
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</section>
<!-- end loading screen -->
<!-- start scroll to top -->
<div id="scrolltop">
    <i class="fa fa-chevron-up fa-3x"></i>
</div>
<!-- end scroll to top -->
<?php include $tpl . 'footer.php';?>
