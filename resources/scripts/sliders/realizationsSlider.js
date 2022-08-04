import Swiper, { Pagination, Navigation, FreeMode } from 'swiper';
import 'swiper/css';

Swiper.use([Pagination, Navigation, FreeMode]);

const realizationsCarousel = () => {
  var hs = new Swiper('.realizations-swiper', {
    init: false,
    freeMode: true,
    slidesPerView: 1.2,
    spaceBetween: 30,
    navigation: {
      nextEl: '.realizations-button-next',
      prevEl: '.realizations-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2.5,
      },
    },
    pagination: {
      el: '.realizations-pagination',
      type: 'fraction',
    },
  });

  hs.init();
};

realizationsCarousel();

export { realizationsCarousel };
