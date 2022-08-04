import LocomotiveScroll from 'locomotive-scroll';
import 'locomotive-scroll/src/locomotive-scroll.scss';

const scrollContainer = document.querySelector('[data-scroll-container]');

export const scroll = new LocomotiveScroll({
  el: scrollContainer,
  smooth: true,
  getDirection: true,
  multiplier: 0.7,
  lerp: 0.07,
  initPosition: {
    x: 0,
    y: 0,
  },
});

export default scroll;
