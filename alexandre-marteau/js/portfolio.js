
document.addEventListener('DOMContentLoaded', function () {
  var sections = document.querySelectorAll('.fade');

  var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.3
  };

  var observer = new IntersectionObserver(handleIntersect, options);

  sections.forEach(function (section) {
    observer.observe(section);
  });

  function handleIntersect(entries, observer) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }
});