// $(document).ready(function() {
//   $('.slider').slick({
//       slidesToShow: 4,
//       prevArrow: '.swiper__button_left',
//       nextArrow: '.swiper__button_right'        
//   });
// });

let swiper1 = new Swiper('.swiper1', {
  navigation: {
      nextEl: '.swiper__arrow_right',
      prevEl: '.swiper__arrow_left',
    },
  
    slidesPerView: 4,
  
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
  
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
  
      },
      // when window width is >= 640px
      985: {
        slidesPerView: 3,
  
      },
  
      1200: {
        slidesPerView: 4,
  
      }
    }
});
  
  let swiper2 = new Swiper('.swiper2', {
  navigation: {
      nextEl: '.swiper__arrow_right',
      prevEl: '.swiper__arrow_left',
  
    },
  
    slidesPerView: 4,
  
});

  let swiper3 = new Swiper('.swiper3', {
    navigation: {
        nextEl: '.swiper__arrow_right',
        prevEl: '.swiper__arrow_left',
    
      },
    
      slidesPerView: 2,
    
});

  let swiper4 = new Swiper('.swiper4', {
    navigation: {
        nextEl: '.swiper__arrow_right4',
        prevEl: '.swiper__arrow_left4',
    
      },
    
      slidesPerView: 1,
    
});