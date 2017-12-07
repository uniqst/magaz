$(document).ready(function () {
  var duration = 500;
  var dick_slider;
  // Scroll to top of web page
  $('.to-top-button').click(function (e) {
    e.preventDefault();

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
    dick_slider.reload();
    if ($(window).outerWidth() >= 1200) {
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
      speed: 600,
      autoplay: true,
      autoplaySpeed: 10000,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1550,
          settings: {
            slidesToShow: 5,
          }
        },
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
      speed: 600,
      autoplay: true,
      autoplaySpeed: 10000,
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

  $('.photo-block').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
    enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
  });

  $('.price-block__tabs > .currency > a').click(function (e) {
    e.preventDefault();

    $('.price-block__tabs > .currency > a').removeClass('active');
    $(this).addClass('active');
    $('.price-block__prices .price-list').removeClass('active');
    $('.price-block__prices').find('#' + $(this).attr('data-type')).addClass('active');
  });

  $('.resopnse-list-js').slick({
    dots: true,
    speed: 500,
    arrows: false,
    fade: true,
    cssEase: 'linear'
  });

  $('.stories-list-js').slick({
    dots: false,
    speed: 500,
    arrows: true,
    fade: true,
    cssEase: 'linear'
  });

  // This is from "most wanted" widjet
  $('.most-wanted-slider-js').slick({
    dots: false,
    speed: 500,
    arrows: true,
    fade: true,
    cssEase: 'linear'
  });

  $('.most-wanted-widget > .most-wanted-info-wrapper:gt(0)').hide();

  $('.most-wanted-widget .slick-next').click(function () {
    var next = $('.most-wanted-info-wrapper:visible');
    next.hide();
    // console.log(next.hide());
    next = next.next('.most-wanted-info-wrapper');
    // console.log('next is: ', next);
    if (next.length) {
      next.show();
    } else {
      next = $('.most-wanted-info-wrapper').first().show();
      // console.log('hello from else');
      // console.log($('.most-wanted-wrapper'));
    }
  });

  $('.most-wanted-widget .slick-prev').click(function () {
    var prev = $('.most-wanted-info-wrapper:visible');
    // console.log(prev.hide());
    prev.hide();
    prev = prev.prev('.most-wanted-info-wrapper');

    // console.log('prev is: ', prev);

    if (prev.length) {
      prev.show();
    } else {
      prev = $('.most-wanted-info-wrapper').last().show();
      // console.log(prev);
    }
  });

  dick_slider = $('.most-wanted-new-slider-js').waterwheelCarousel({
    separation: 200,
    separationMultiplier: .7,
    horizonOffset: 0,
    sizeMultiplier: .84,
    opacityMultiplier: .7
  });


  function resizeSlider() {
    var width = $(window).outerWidth();
    if (width < 1400) {
      dick_slider.reload();
    // } else if (width >= 1200 && width < 1400) {
    //   dick_slider.reload({
    //     separation: 210
    //   });
    } else if (width >= 1400 && width < 1600) {
      dick_slider.reload({
        separation: 240
      });
    } else if (width >= 1600 && width < 1900) {
      dick_slider.reload({
        separation: 270
      });
    }
  }

  resizeSlider();

  $(window).resize(resizeSlider);

  var lastGirl = null,
      nextGirl = null;

  $('.most-wanted-new-slider-js > img').click(function() {
    $('.most-wanted-wrapper').hide();
    $('.most-wanted-wrapper#' + $(this).attr('data-girl-id')).show();
    lastGirl = $(this).attr('data-girl-id');
  });

  // Hide by default all info blocks except the first
  $('.most-wanted-new-slider-js > img:gt(0)').each(function () {
    $('.most-wanted-wrapper#' + $(this).attr('data-girl-id')).hide();
    // lastGirl = $(this).attr('data-girl-id');
  });

  $('.most-wanted-new-slider-js .mv-next').click(function () {
    dick_slider.prev();

    // $('.most-wanted-wrapper#' + lastGirl).hide();

    var next = $('.most-wanted-wrapper:visible');
    next.hide();
    // console.log(next.hide());
    next = next.next('.most-wanted-wrapper');
    // console.log('next is: ', next);
    if (next.length) {
      next.show();
    } else {
      next = $('.most-wanted-wrapper').first().show();
      // console.log('hello from else');
      // console.log($('.most-wanted-wrapper'));
    }
    // lastGirl = next.attr('id');
    // next.hide();
    // next.next().show();
  });

  $('.most-wanted-new-slider-js .mv-prev').click(function () {
    dick_slider.next();
    // $('.most-wanted-wrapper#' + lastGirl).hide();

    var prev = $('.most-wanted-wrapper:visible');
    // console.log(prev.hide());
    prev.hide();
    prev = prev.prev('.most-wanted-wrapper');

    // console.log('prev is: ', prev);

    if (prev.length) {
      prev.show();
    } else {
      prev = $('.most-wanted-wrapper').last().show();
      // console.log(prev);
    }
  });
});