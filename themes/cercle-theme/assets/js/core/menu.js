import ScrollToElement from 'scroll-to-element';
import { STICKY_HEADER_HEIGHT } from '../config';

(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    // anchors
    const anchor = anchor => anchor.addEventListener('click', (e) => {
      const hash = anchor.hash;
      if (hash && anchor.pathname === w.location.pathname) {
        e.preventDefault();
        d.querySelectorAll('.hamburger').forEach(item => item.classList.remove('is-active'));
        d.body.classList.remove('menu-open');
        ScrollToElement(hash, {
          duration: 1500,
          ease: 'out-expo',
          offset: - STICKY_HEADER_HEIGHT
        });
      }
    });
    d.querySelectorAll('a[href*="#"]').forEach(anchor);
  });
} (window, document));
