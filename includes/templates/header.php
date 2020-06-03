<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title><?php gettitle()?></title>
        <link rel="stylesheet" href="<?php echo $css?>bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo $css?>bootstrap_en.css"/>
        <link rel="stylesheet" href="<?php echo $css?>font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo $css?>owl.carousel.min.css"/>
        <link rel="stylesheet" href="<?php echo $css?>owl.theme.min.css"/>
        <link rel="stylesheet" href="<?php echo $css?>animate.min.css"/>
        <link rel="stylesheet" href="<?php echo $css?>style.css"/>
        <?php if(isset($_GET['lang']) && $_GET['lang'] == 'ar'){?>
            <link rel="stylesheet" href="<?php echo $css?>style_rtl.css"/>
        <?php
        }else{
            ?>
            <link rel="stylesheet" href="<?php echo $css?>style_ltr.css"/>
        <?php
        }
        ?>
        <link rel="stylesheet" href="<?php echo $css?>media.css"/>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="<?php echo $js?>html5shiv.min.js"></script>
        <script src="<?php echo $js?>respond.min.js"></script>
        <![endif]-->
    </head>
    <body dir="ltr">