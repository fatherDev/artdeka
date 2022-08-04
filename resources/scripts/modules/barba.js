import barba from '@barba/core';
import gsap from 'gsap';
import { scroll } from './locomotive';
import { homeCarousel } from '../sliders/heroSlider';
import { realizationsCarousel } from '../sliders/realizationsSlider';
import revealText from './textSplitting';
import realizationsLightbox from './lightbox';
import { homeGalleryCarousel } from '../sliders/gallerySlider';
import hidingHeader from './header';
import hrefChecker from './hrefChecker';
import floatingLabels from './floatingLabels';
import { testimonialsCarousel } from '../sliders/testimonialsSlider';
import { stagesCarousel } from '../sliders/stagesSlider';
import hamburgerMenu from './hamburger';

function initCarousel() {
  if (document.querySelector('.swiper') != null) {
    homeCarousel();
    realizationsCarousel();
    homeGalleryCarousel();
    testimonialsCarousel();
    stagesCarousel();
  }
}

function barbaInit() {
  const loader = document.querySelector('.page-cover');

  // reset position of the loading screen
  gsap.set(loader, {
    scaleY: 0,
    transformOrigin: 'bottom',
    autoAlpha: 1,
  });

  function loaderIn() {
    // GSAP tween to stretch the loading screen across the whole screen
    return gsap.fromTo(
      loader,
      {
        scaleY: 0,
      },
      {
        duration: 1,
        scaleY: 1,
        rotation: 0,
        ease: 'Power2.easeInOut',
        transformOrigin: 'bottom',
      }
    );
  }

  function loaderAway() {
    // GSAP tween to hide the loading screen
    return gsap.to(loader, {
      duration: 1,
      scaleY: 0,
      transformOrigin: 'top',
      ease: 'Power2.easeInOut',
    });
  }

  // do something before the transition starts
  barba.hooks.before(() => {
    document.querySelector('html').classList.add('is-transitioning');
    barba.wrapper.classList.add('is-animating');
  });

  // do something after the transition finishes
  barba.hooks.after(() => {
    document.querySelector('html').classList.remove('is-transitioning');
    barba.wrapper.classList.remove('is-animating');
    revealText('.reveal-text');
    scroll.destroy();
    scroll.init();
    realizationsLightbox();
    hidingHeader();
    hrefChecker();
    const bodyClasses = document.getElementById('body-classes');
    document.body.setAttribute('class', bodyClasses.className);
    document.querySelectorAll('.wpcf7 > form').forEach(function (e) {
      wpcf7.init(e);
    });
    floatingLabels();
    hamburgerMenu();
    document.getElementById('preloader').classList.add('is-blocked');
  });

  barba.init({
    transitions: [
      {
        async leave() {
          await loaderIn();
        },
        enter() {
          loaderAway();
        },
        afterEnter() {
          setTimeout(() => {
            initCarousel();
          }, 550);
        },
      },
    ],
  });
}

window.addEventListener('load', function () {
  barbaInit();
});
