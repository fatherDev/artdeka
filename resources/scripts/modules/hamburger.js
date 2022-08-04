const hamburgerMenu = () => {
  const menuTrigger = document.getElementById('c-hamburger-menu');
  const menu = document.getElementById('menu-primary-menu');
  const contactWrapper = document.querySelector('.c-contact__wrapper');

  menuTrigger.addEventListener('click', function () {
    this.classList.toggle('is-active');
    menu.classList.toggle('is-active');
    contactWrapper.classList.toggle('is-active');
    document.body.classList.toggle('scroll-block');
  });
};

export default hamburgerMenu;
