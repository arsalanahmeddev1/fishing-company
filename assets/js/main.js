// for lazy load in images
const images = document.querySelectorAll('img');
images.forEach(img => {
  img.setAttribute('loading', 'lazy');
});

// mobile menu
let navs = document.querySelector('.primary-nav');
let menuIcon = document.querySelectorAll('.menu-toggle');
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
  e.addEventListener('click', function () {
    navs.classList.toggle('active');
  });
});