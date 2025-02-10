console.log(`Width: ${window.screen.width}, Height: ${window.screen.height}`);

// for lazy load in images
const images = document.querySelectorAll("img");
images.forEach((img) => {
  img.setAttribute("loading", "lazy");
});

// mobile menu
let navs = document.querySelector(".primary-nav");
let menuIcon = document.querySelectorAll(".menu-toggle");
menuIcon.forEach(function (e) {
  e.addEventListener("click", function () {
    navs.classList.toggle("active");
  });
});

// Slick Carousel For Hero Section:


$('.hero-banner-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
});


