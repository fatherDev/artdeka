import Swiper, { Pagination, EffectFade, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/effect-fade';

Swiper.use([Pagination, EffectFade, Autoplay]);

const homeCarousel = () => {
  var hs = new Swiper('.hero-swiper', {
    init: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 1000,
    pagination: {
      el: '.hero-pagination',
      type: 'fraction',
    },
  });

  const preloaderActive = document.getElementById('preloader');
  if (!preloaderActive.classList.contains('is-blocked')) {
    setTimeout(function () {
      hs.init();
    }, 3500);
  } else {
    hs.init();
  }
};

homeCarousel();

export { homeCarousel };
