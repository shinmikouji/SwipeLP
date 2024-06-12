let newsSwiper = new Swiper(".swiper", {
  // autoplay: true,
  loop: true,
  slidesPerView: 1.5,
  spaceBetween: 20,
  speed: 800,
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
  },
  navigation: {
    prevEl: ".swiper-button-prev",
    nextEl: ".swiper-button-next",
  },
})