(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    const stickyHeader = d.getElementById('sticky-header');
    w.addEventListener('scroll', () => {
      if (w.pageYOffset > 500) d.body.classList.add('is-sticky');
      else d.body.classList.remove('is-sticky');
    });

    const hamburgers = d.querySelectorAll('.hamburger');
    const onHamburgerClick = () => {
      hamburgers.forEach(item => item.classList.toggle('is-active'));
      d.body.classList.toggle('menu-open');
    };
    hamburgers.forEach(hamburger => hamburger.addEventListener('click', onHamburgerClick));
  });
} (window, document));
