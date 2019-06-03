(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    // Handle navbar-toggler click
    const toggler = d.getElementById('navbar-toggler');
    toggler.addEventListener('click', () => {
      toggler.classList.toggle('is-active');
      d.body.classList.toggle('menu-open');
    });
  });
} (window, document));
