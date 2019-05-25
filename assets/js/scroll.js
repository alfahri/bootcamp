$(window).scroll(function() {
  if ($(document).scrollTop() > 10) {
    $('.navbar').addClass('color-change');
  } else {
    $('.navbar').removeClass('color-change');
  }
});