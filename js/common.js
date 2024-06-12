jQuery(function ($) {
  var s = $('.header');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 450) {
      s.addClass('fixed_navigation');
    } else {
      s.removeClass('fixed_navigation');
    }
  });
});


jQuery(function ($) {
  var s = $('.page_menu');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 450) {
      s.addClass('fixed_menu');
    } else {
      s.removeClass('fixed_menu');
    }
  });
});

