$(document).ready(function () {
  $('.new-girls-slider > .slick-carousel').slick(
    {
      arrows: true,
      // prevArrow: 'wow',
      // nextArrow: 'wow-next',
      infinite: true,
      slidesToShow: 3,
      responsive: [
        // {
        //   breakpoint: 1024,
        //   settings: {
        //     slidesToShow: 3,
        //     slidesToScroll: 3,
        //     infinite: true,
        //     dots: true
        //   }
        // },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
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