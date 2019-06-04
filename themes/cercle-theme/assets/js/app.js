import './polyfill';
import Glide from '@glidejs/glide';
import ScrollToElement from 'scroll-to-element';
import { STICKY_HEADER_HEIGHT } from './config';
import '../images';
import './core';

(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    if (d.querySelector('.equipe-slider'))
      new Glide('.glide.equipe-slider', {
        autoplay: 4000,
        animationDuration: 1000,
        type: 'carousel',
        perView: 5,
        gap: 0,
        focusAt: 'center',
        breakpoints: {
          1199: { perView: 3 },
          991: { perView: 2 },
          386: { perView: 1 }
        }
      })
        .mount();

    if (d.querySelector('.expert-slider')) {
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
    }

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

    const scrollDown = (e) => {
      e.preventDefault();
      ScrollToElement(document.querySelectorAll('.section-item')[1], {
        duration: 1200,
        ease: 'out-expo',
        offset: - STICKY_HEADER_HEIGHT
      });
    };
    if (d.querySelector('.section-item')) d.getElementById('scroll-down').addEventListener('click', scrollDown);
  });
} (window, document));
