(function (w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    // Handle navbar-toggler click
    d.getElementById('navbar-toggler').addEventListener('click', () => d.body.classList.toggle('menu-open'));
  });
} (window, document));
