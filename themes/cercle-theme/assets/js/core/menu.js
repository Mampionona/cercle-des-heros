import ScrollToElement from 'scroll-to-element';

(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    // Handle navbar-toggler click
    const toggler = d.getElementById('navbar-toggler');
    toggler.addEventListener('click', () => {
      toggler.classList.toggle('is-active');
      d.body.classList.toggle('menu-open');
    });

    // anchors
    const anchor = anchor => anchor.addEventListener('click', (e) => {
      const hash = anchor.hash;
      if (hash && anchor.pathname === w.location.pathname) {
        e.preventDefault();
        toggler.classList.remove('is-active');
        d.body.classList.remove('menu-open');
        ScrollToElement(hash, {
          duration: 1500,
          ease: 'out-quint',
          offset: 0
        });
      }
    });
    d.querySelectorAll('a[href*="#"]').forEach(anchor);
  });
} (window, document));
