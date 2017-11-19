$(document).ready(function () {
  var duration = 1000;
  // Scroll to top of web page
  $('.to-top-button').click(function (e) {
    e.preventDefault();
    console.log('here we go!');

    // var offset = $('.' +.offset().top;

    $('html,body').animate({
      // scrollTop: $('.to-top').offset().top
      scrollTop: 0
    }, duration);
  });


  // Open left menu on mobile version
  $('.left-menu-button button').click(function () {
    if ($(window).outerWidth() >= 1200) return;

    var $slider = $('.main-sidebar-menu-js');
    var $body = $('body');

    if ($slider.hasClass('visible')) {
      $slider.removeClass('visible');
      $body.removeClass('no-scroll');
    } else {
      $slider.addClass('visible');
      $body.addClass('no-scroll');
    }
      // .css({
      //   height: $('html').height(),
      //   backgroundColor: 'rgba(0, 0, 0, .7)'
      // });
  });
  $(window).resize(function () {
    if ($(window).outerWidth() >= 1200) {
      $('.main-sidebar-menu-js').removeClass('visible');
      $('body').removeClass('no-scroll');
    }
  });
  $('.main-sidebar-close').click(function () {
    $('.main-sidebar-menu-js').removeClass('visible');
    $('body').removeClass('no-scroll');
  });



  // Bottom slider widjet
  $('.bottom-items-slider > .slick-carousel')
    .slick(
    {
      arrows: true,
      infinite: true,
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 15000,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 1050,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 630,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    }
  );

  // Slider on the main page
  $('.new-girls-slider > .slick-carousel').slick(
    {
      arrows: true,
      infinite: true,
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 15000,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        // {
        //   breakpoint: 840,
        //   settings: {
        //     slidesToShow: 3,
        //   }
        // },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 450,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
      // slidesToScroll: 3
    }
  );

  console.log($('.photo-block__list'))

  $('.photo-block').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
    enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
  });

});