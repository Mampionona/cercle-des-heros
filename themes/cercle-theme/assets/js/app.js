import Glide from '@glidejs/glide';
// import 'bootstrap';
import '../images';
import './core';

(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    new Glide('.glide', {
      autoplay: 4000,
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

    d.querySelectorAll('.list-background').forEach((list) => (
      list.querySelectorAll('li').forEach((item) => {
        const span = `<span class="bg">${item.innerHTML}</span>`;
        item.innerHTML = span;
      })
    ));
  });
} (window, document));
