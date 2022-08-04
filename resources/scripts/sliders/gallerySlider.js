import Swiper, { Pagination, Navigation } from 'swiper';
import 'swiper/css';

Swiper.use([Pagination, Navigation]);

const homeGalleryCarousel = () => {
  var interleaveOffset = 0.3;

  var swiperOptions = {
    init: false,
    speed: 1000,
    watchSlidesProgress: true,
    allowTouchMove: false,
    navigation: {
      nextEl: '.gallery-button-next',
      prevEl: '.gallery-button-prev',
    },
    pagination: {
      el: '.gallery-pagination',
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    on: {
      progress: function (e, f) {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          var slideProgress = swiper.slides[i].progress;
          var innerOffset = swiper.width * interleaveOffset;
          var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(
            '.c-gallery-slide__inner'
          ).style.transform = 'translate3d(' + innerTranslate + 'px, 0, 0)';
        }
      },
      setTransition: function () {
        var swiper = this;
        var speed = 1000;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].querySelector(
            '.c-gallery-slide__inner'
          ).style.transition = `${speed}ms`;
        }
      },
    },
  };
  var hs = new Swiper('.home-gallery-swiper', swiperOptions);

  hs.init();

  const amount = -32;
  let initial = 0;
  const nextTrigger = document.querySelector('.gallery-button-next');
  const prevTrigger = document.querySelector('.gallery-button-prev');
  const galleryFraction = document.querySelector('.gallery-pagination');

  if (nextTrigger) {
    nextTrigger.addEventListener('click', function () {
      initial += amount;
      galleryFraction.style.transform = 'translateY(' + initial + 'px)';
    });
  }

  if (prevTrigger) {
    prevTrigger.addEventListener('click', function () {
      initial -= amount;
      galleryFraction.style.transform = 'translateY(' + initial + 'px)';
    });
  }
};

homeGalleryCarousel();

export { homeGalleryCarousel };
