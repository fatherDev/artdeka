/**
 * External Dependencies
 */

//! MODULES
import './modules/locomotive';
import './modules/header';
import './modules/barba';
import './modules/textSplitting';
import './modules/floatingLabels';
import realizationsLightbox from './modules/lightbox';
import revealText from './modules/textSplitting';
import scroll from './modules/locomotive';
import hidingHeader from './modules/header';
import hrefChecker from './modules/hrefChecker';
import floatingLabels from './modules/floatingLabels';
import hamburgerMenu from './modules/hamburger';

//! SLIDERS
import './sliders/heroSlider';
import './sliders/realizationsSlider';
import './sliders/gallerySlider';
import './sliders/testimonialsSlider';
import './sliders/stagesSlider';
import checkPreloader from './modules/ifPreloaderExist';

document.addEventListener('DOMContentLoaded', () => {
  revealText('.reveal-text');
  scroll.update();
  realizationsLightbox();
  hidingHeader();
  hrefChecker();
  floatingLabels();
  hamburgerMenu();
  checkPreloader();
});

function hidePreloader() {
  setTimeout(function () {
    document.getElementById('preloader').classList.add('is-hidden');
    document.body.classList.remove('is-delayed');
  }, 3500);
}

hidePreloader();
