$('.slick01').slick({
  accessibility: false,
  fade: true,
  autoplay: true,
  infinite: true,
  dots: false,
  dotsClass: 'slide-dots',
  arrows: false,
  autoplaySpeed: 3000,
  speed: 1000,
});


$(function () {
  $('.counter').counterUp({
    delay: 10,
    time: 2000
  });
});