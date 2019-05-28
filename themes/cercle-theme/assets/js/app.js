import Glide from '@glidejs/glide';
// import 'bootstrap';
import '../images';
import './core';

(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    new Glide('.glide', {
      autoplay: false,
      animationDuration: 1000,
      type: 'carousel',
      perView: 5,
      gap: 0,
      breakpoints: {
        991: {
          perView: 2
        },
        386: {
          perView: 1
        }
      }
    })
    .mount();
  });
} (window, document));
