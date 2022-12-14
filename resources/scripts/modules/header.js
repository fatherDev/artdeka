import { scroll } from './locomotive';

const hidingHeader = () => {
  scroll.on('scroll', (args) => {
    var prevScroll = 0;
    var curScroll;
    var direction = '';
    var prevDirection = '';

    var header = document.querySelector('.l-header');

    var checkScroll = function () {
      curScroll = args.scroll.y;

      if (curScroll < 40) return;
      if (curScroll > prevScroll) {
        //scrolled up
        direction = args.direction;
      } else if (curScroll < prevScroll) {
        //scrolled down
        direction = args.direction;
      }

      if (direction !== prevDirection) {
        toggleHeader(direction, curScroll);
      }

      prevScroll = curScroll;
    };

    var toggleHeader = function (direction, curScroll) {
      if (direction === 'down' && curScroll > 40) {
        header.classList.add('hide');
        header.classList.remove('show');
        prevDirection = direction;
      } else if (direction === 'up') {
        header.classList.remove('hide');
        header.classList.add('show');
        prevDirection = direction;
      }
    };

    checkScroll();

    if (args.scroll.y < 40) {
      header.classList.remove('show');
    }
  });
};

export default hidingHeader;
