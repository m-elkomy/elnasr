<?php

//initlaize routes for directory
$langu   = 'includes/languages/';//languages directory
$func    = 'includes/functions/';//function directory
$tpl     = 'includes/templates/';//templates directory
$css     = 'layout/css/';        //css directory
$js      = 'layout/js/';         //js directroy
$image   = 'layout/images/';     //image directroy

//include important file
include $func  . 'function.php';

if(isset($_GET['lang'])){
    if($_GET['lang']=='ar'){
        include $langu . 'arabic.php';
    }else{
        include $langu . 'english.php';
    }
}else{
    include $langu . 'english.php';
}

include $tpl   . 'header.php';
include $tpl   . 'navbar.php';