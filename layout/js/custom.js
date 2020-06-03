$(function () {
    window.onscroll = function () {
        myFunction()
    };
    var nav = document.getElementById("my-navbar");
    var sticky = nav.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            nav.classList.add("sticky");
            $('.upper-bar').hide();
        } else {
            nav.classList.remove("sticky");
            $('.upper-bar').show();
        }
    }


    //trigger mix it up
    var mixer = mixitup('.gallery');
    // calling mixitup shuffle
    $(".our-clients .shuffle li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
    });

    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsdesktop:[1000,1],
        itemsdesktopsmall:[979,1],
        itemstablet:[768,1],
        pagination:false,
        navigation:true,
        navigationtext:["",""],
        autoplay:true,
        rtl:true

    });

    var owl = $('.owl-carousel');
    owl.owlCarousel();
// Go to the next item
    $('.owl-next').click(function() {
        owl.trigger('next.owl.carousel');
    })
// Go to the previous item
    $('.owl-prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    });

    new WOW().init();

    $("body").niceScroll({
        cursorcolor:"#23C5B0",
        cursorwidth:"10px"
    });


    var scrollbutton = $('#scrolltop');
    $(window).scroll(function () {
       if($(this).scrollTop()>700){
           scrollbutton.show();
       }else{
           scrollbutton.hide();
       }
    });
    scrollbutton.click(function () {
        $('html,body').animate({scrollTop:0},600);
    });
    //add active class to links
    $('.navbar-nav li a').click(function () {
       $(this).addClass('active').parent().siblings().find('a').removeClass('active');
    });

    //sync links with section
    $(window).scroll(function () {
        $('.block').each(function () {
           if($(window).scrollTop()>$(this).offset().top){
                var blockid = $(this).attr('id');
                $('.navbar-nav a[data-scroll="'+ blockid +'"]').addClass('active').parent().siblings().find('a').removeClass('active');
           }
        });
    });

    $('.navbar-nav li a').click(function (e) {
       e.preventDefault();
        $('html,body').animate({
            scrollTop:$('#'+$(this).data('scroll')).offset().top
        },1000);
    });

    $('.ar').click(function(){
        $('html').attr('lang','ar');
        $('body').attr('dir','rtl');
    });
    $('.en').click(function(){
        $('html').attr('lang','en');
        $('body').attr('dir','ltr');
    });

    $('[placeholder]').focus(function(){
        $(this).attr('data-text',$(this).attr('placeholder'));
        $(this).attr('placeholder','');
    }).blur(function(){
        $(this).attr('placeholder',$(this).attr('data-text'));
    });

    //validate form
    var usererror = true,
        emailerror = true,
        messageerror = true,
        cellphoneerror = true;
    $('.username').blur(function () {
        if($(this).val().length < 5){
            $('.custom-alert').html('Sorry User Name Can Not Be Less Than 5 Characters');
            $(this).parent().next('.custom-alert').fadeIn(200)
                .end().css('border','1px solid #fff');;
            usererror = true;
        }else{
            $(this).parent().next('.custom-alert').fadeOut(200);
            $(this).parent().css('border','1px solid #29D9C2');
            $(this).parent().find('.asterisk').fadeOut(100);
            usererror = false;
        }
    });
    $('.email').blur(function () {
        if($(this).val() === ''){
            $(this).parent().next('.custom-alert').fadeIn(200);
            $(this).parent().css('border','1px solid #fff')
            emailerror = true;
        }else{
            $(this).parent().next('.custom-alert').fadeOut(200);
            $(this).parent().css('border','1px solid #29D9C2');
            $(this).parent().find('.asterisk').fadeOut(100);
            emailerror = false;
        }
    });
    $('.cellphone').blur(function () {
        if($(this).val() === '' || !isNaN($(this).val())){
            $('.custom-alert').html('Sorry The Phone Can Not Be Empty And Must Be Number');
            $(this).parent().next('.custom-alert').fadeIn(200);
            $(this).parent().css('border','1px solid #fff')
            cellphoneerror = true;
        }else{
            $(this).parent().next('.custom-alert').fadeOut(200);
            $(this).parent().css('border','1px solid #29D9C2');
            $(this).parent().find('.asterisk').fadeOut(100);
            cellphoneerror = false;
        }
    });
    $('.message').blur(function () {
        if($(this).val().length < 11){
            $(this).parent().next('.custom-alert').fadeIn(200);
            $(this).parent().css('border','1px solid #fff');
            messageerror = true;
        }else{
            $(this).parent().next('.custom-alert').fadeOut(200);
            $(this).parent().css('border','1px solid #29D9C2');
            $(this).parent().find('.asterisk').fadeOut(100);
            messageerror = false;
        }
    });
    $('.contact-form').submit(function (e) {
        if(usererror==true || emailerror == true || messageerror == true){
            e.preventDefault();
            $('.username,.email,.cellphone,.message').blur();
        }else{

        }
    })
});

$(window).on("load",function () {
   $('.loading').fadeOut(2000);
});