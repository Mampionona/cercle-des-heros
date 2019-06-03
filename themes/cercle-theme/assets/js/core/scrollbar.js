import Scrollbar from 'smooth-scrollbar';

(function(w, d, undefined) {
  d.addEventListener('DOMContentLoaded', () => {
    const updateScrollableHeight = () => {
      d.querySelector('[data-scrollbar]').style.height = `${w.innerHeight}px`;
    };
    updateScrollableHeight();
    w.addEventListener('resize', updateScrollableHeight);

    Scrollbar.initAll();
  });
} (window, document));
