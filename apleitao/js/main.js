jQuery(function($) {

  $('#sidr a').on('click', function () {
    $.sidr('close');
  });

  $('#simple-menu').sidr();


  $('#sidr').css('display','block');

  $('.menu-button').on('click', function(){
    $('#subs-menu').slideToggle(200);
  });

  $(window).on('resize', function(){
    if( $(window).width() > 768 ){
      $('#subs-menu').show();
    }else{
      $('#subs-menu').hide();
    }
  });


  $('.directions__select').niceSelect();



  $('a[data-rel^=lightcase]').lightcase({
    showTitle: false,
    showCaption: false,
    showSequenceInfo: false,
    overlayOpacity: 0.7,
    maxWidth: '100%',
    maxHeight: '100%',
    inline: {
      width: 1000,
      height: 'auto',
    },
    video: {
      width : 1920,
      height : 1080,
      poster : '',
      preload : 'auto',
      controls : true,
      autobuffer : true,
      autoplay : false,
      loop : false
    },
    onStart : {
		bar: function() {
      $('.materiais-lightbox__close').click(function(){
        lightcase.close();
      });
		}
	},
  });

  $('.slideshow-home').slick({
    dots: true,
    arrows: true,
    appendArrows: $(".header-slide__arrows"),
    appendDots: $(".header-slide__dots"),
    autoplay: true,
    pauseOnFocus: false,
    pauseOnHover: false
  });

  $('.slide-space1-main').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     fade: true,
     // autoplay: true,
     asNavFor: '.slide-space1',
    });

  $('.slide-space1').slick({
    asNavFor: '.slide-space1-main',
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplay: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    centerMode: true,
    centerPadding: 0,
    focusOnSelect: true,
    appendArrows: $("#arrows1"),
    responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
  });


  $('.slide-space2-main').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     fade: true,
     asNavFor: '.slide-space2'

    });

  $('.slide-space2').slick({
    asNavFor: '.slide-space2-main',
    dots: false,
    arrows: true,
    autoplay: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    centerMode: true,
    centerPadding: 0,
    focusOnSelect: true,
    appendArrows: $("#arrows2"),
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
  });



  //Animate when click in a anchor link
  $('a[href*="#"]:not([href="#"],[href*=inline],[href="#sidr"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 0
        }, 1000);

      }
    }

  });


});
