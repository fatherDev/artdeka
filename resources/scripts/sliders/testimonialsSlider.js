import Swiper, { Pagination, EffectFade, Autoplay, Navigation } from 'swiper';
import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';
import scroll from '../modules/locomotive';

Swiper.use([Pagination, EffectFade, Autoplay, Navigation]);

const testimonialsCarousel = () => {
  var hs = new Swiper('.testimonials-swiper', {
    init: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    allowTouchMove: false,
    autoHeight: true,
    speed: 1000,
    pagination: {
      el: '.testimonials-pagination',
      type: 'bullets',
      clickable: true,
    },
    navigation: {
      nextEl: '.testimonials-button-next',
      prevEl: '.testimonials-button-prev',
    },
    on: {
      slideChangeTransitionEnd: function () {
        scroll.update();
      },
    },
  });

  hs.init();
};

testimonialsCarousel();

export { testimonialsCarousel };
