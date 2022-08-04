import Swiper, { EffectFade, Autoplay, Navigation } from 'swiper';
import 'swiper/css';
import 'swiper/css/effect-fade';

Swiper.use([EffectFade, Autoplay, Navigation]);

const stagesCarousel = () => {
  var hsText = new Swiper('.stages-text-swiper', {
    init: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    loop: true,
    allowTouchMove: false,
    navigation: {
      nextEl: '.stages-button-next',
      prevEl: '.stages-button-prev',
    },
    speed: 1000,
  });

  hsText.init();

  var hsImg = new Swiper('.stages-img-swiper', {
    init: false,
    slidesPerView: 1.3,
    spaceBetween: 20,
    loop: true,
    speed: 1000,
    breakpoints: {
      1024: {
        slidesPerView: 1.8,
        spaceBetween: 0,
      },
    },
    allowTouchMove: false,
    navigation: {
      nextEl: '.stages-button-next',
      prevEl: '.stages-button-prev',
    },
  });

  hsImg.init();
};

stagesCarousel();

export { stagesCarousel };
