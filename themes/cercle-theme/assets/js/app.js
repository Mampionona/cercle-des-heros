import './polyfill';
import Glide from '@glidejs/glide';
import '../images';
import './core';

(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    new Glide('.glide.equipe-slider', {
      autoplay: 4000,
      animationDuration: 1000,
      type: 'carousel',
      perView: 5,
      gap: 0,
      breakpoints: {
        991: { perView: 2 },
        386: { perView: 1 }
      }
    })
      .mount();

    const expertGlide = new Glide('.expert-slider.glide', {
      perView: 1,
      rewind: false,
      type: 'carousel'
    });
    expertGlide.on('move.after', () => {
      const index = expertGlide.index;
      const glideElement = d.querySelector(expertGlide.selector);
      glideElement.classList.remove('first');
      glideElement.classList.remove('last');
      if (index === 0) glideElement.classList.add('first');
      else if (index === (expertGlide._c.Html.slides.length - 1)) glideElement.classList.add('last');
      else glideElement.classList.remove('first', 'last');
    });
    expertGlide.mount();

    d.querySelectorAll('.list-background').forEach((list) => (
      list.querySelectorAll('li').forEach((item) => {
        const span = `<span class="bg">${item.innerHTML}</span>`;
        item.innerHTML = span;
      })
    ));

    const update = (title) => {
      const span = title.querySelector('.line');
      const position = title.getBoundingClientRect();
      const positionLeft = position.left;
      span.style.left = `-${positionLeft}px`;
      span.style.width = `${positionLeft - 15}px`;
    };
    const positionOfLine = () => d.querySelectorAll('.section-title').forEach(update);
    positionOfLine();
    w.addEventListener('resize', positionOfLine);
  });
} (window, document));
