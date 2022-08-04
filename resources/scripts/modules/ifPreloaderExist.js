import scroll from './locomotive';

const preloaderActive = document.getElementById('preloader');

const checkPreloader = () => {
  if (!preloaderActive.classList.contains('is-blocked')) {
    document.body.classList.add('is-delayed');
    const heroTitle = document.querySelector('.l-hero-with-img__title');
    const heroCover = document.querySelector('.l-hero-with-img__img-wrapper');

    const contactTitle = document.querySelector('.l-contact-form__title');
    const contactRightCol = document.querySelector(
      '.l-contact-form__col--right'
    );
    const contactLeftCol = document.querySelector('.l-contact-form__col--left');

    const heroPagination = document.querySelector('.hero-pagination__wrapper');

    if (heroTitle) {
      heroTitle.classList.add('is-delayed');
      heroCover.classList.add('is-delayed');
    }

    if (contactTitle) {
      contactTitle.classList.add('is-delayed');
      contactRightCol.classList.add('is-delayed');
      contactLeftCol.classList.add('is-delayed');
    }

    if (heroPagination) {
      heroPagination.classList.add('is-delayed');
    }
  }

  if (
    document.body.classList.contains('error404') &&
    document.body.classList.contains('is-delayed')
  ) {
    preloaderActive.classList.add('is-blocked');
  }

  scroll.stop();
  setTimeout(function () {
    scroll.start();
    scroll.update();
  }, 3500);
};

export default checkPreloader;
