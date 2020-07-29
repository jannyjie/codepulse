$(document).ready(function(){
  
  // init wow animation
    wow = new WOW(
		{
			boxClass:     'wow',      
			animateClass: 'animated', 
			offset:       0,          
			mobile:       true,       
			live:         true        
		}
	)
    wow.init();
    
  // submenu click function
    if($(window).width()<992){
      $('.has_submenu>a').on('click', function(e){
        e.preventDefault();
        $(this).siblings('.submenu').slideToggle();
      })
    }
  
  // toggleopen click function
    $('.toggleopen').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('opened');
        $(this).next().slideToggle();
    });
  
  // set page height  
    var topbottomh = $('.headerwrap').height() + $('.footer').height();
    $('.pagecont').css('min-height','calc(100vh - '+ topbottomh +'px)');
  
  // home slider setting
    $('.mainslider').slick({
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true
    });

  // normal slider
    $('.slider-col-3').slick({
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        speed: 200,
        slidesToShow: 3,
        adaptiveHeight: true,
        responsive:[
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
    });
    
  // product gallery slider setting
      var album = $('.gallery');
      var pager = $('.thumbs');
      var picPopup = $('.popup');

      album.slick({
        mobileFirst: true,
        autoplay: true,
        autoplaySpeed: 3000,
        fade: true,
        arrows: false,
        draggable: false,
        swipe: false,
        cssEase: 'cubic-bezier(0,.4,.4,1)',
        asNavFor: pager
      });

      pager.slick({
        mobileFirst: true,
        dots: false,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: true,
        focusOnSelect: true,
        asNavFor: album,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 4,
            }
          }
        ]
      });
  
  // pictures popup
      picPopup.magnificPopup({
        type: 'image',
        tLoading: 'Loading ...',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
      });
  
  // scroll functions 
    var menuh = $('header').height();
    $(window).on('scroll',function(){
        if ($(window).scrollTop() > menuh) {
            $('.headerwrap').addClass('fixed');
            $('.headerwrap').css('padding-top',menuh);
        }else{
            $('.headerwrap').removeClass('fixed');
            $('.headerwrap').css('padding-top',0);
        }
        if ($(window).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    $('.scrollToTop').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
