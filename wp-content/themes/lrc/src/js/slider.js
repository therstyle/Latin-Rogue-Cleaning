import Flickity from 'flickity';

class Slider {
  constructor() {
    this.selector = document.querySelector('.quotes');
    this.options = {
      autoPlay: 5000,
      prevNextButtons: false
    }
  }

  init() {
    console.log('init slider');
    new Flickity(this.selector, this.options);
  }
}

export default new Slider();