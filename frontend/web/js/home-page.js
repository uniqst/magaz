$(document).ready(function () {
  $('.new-girls-slider > .slick-carousel').slick(
    {
      arrows: true,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 660,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 440,
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