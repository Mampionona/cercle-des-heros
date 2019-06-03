import ScrollToElement from 'scroll-to-element';

const options = {
  duration: 1000,
  // See https://github.com/component/ease for more
  ease: 'out-quint',
  offset: 0
};

(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    const toggler = d.getElementById('navbar-toggler');
    const anchor = (anchor) =>
      anchor.addEventListener('click', (e) => {
        const hash = anchor.hash;
        if (hash && anchor.pathname === w.location.pathname) {
          toggler.classList.remove('is-active');
          d.body.classList.remove('menu-open');
          ScrollToElement(hash, options);
          e.preventDefault();
        }
      });
    // Handle navbar-toggler click
    toggler.addEventListener('click', () => {
      toggler.classList.toggle('is-active');
      d.body.classList.toggle('menu-open');
    });
    d.querySelectorAll('a[href*="#"]').forEach(anchor);
  });
} (window, document));
