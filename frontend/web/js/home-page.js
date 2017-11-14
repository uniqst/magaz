$(document).ready(function () {
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
          breakpoint: 840,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 570,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
      // slidesToScroll: 3

    }
    // {
    //   loop: true,
    //   margin: 20,
    //   nav: true,
    //   responsive:{
    //     0:{
    //         items:2
    //     },
    //     600:{
    //         items:3
    //     },
    //     1200:{
    //         items:4
    //     }
    //   }
    // }
  );
});