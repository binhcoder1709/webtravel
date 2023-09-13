$(document).ready(function() {
    $(window).scroll(function() {
      if ($(window).scrollTop() > 100) {
        $('header').css('background-color', 'white');
        $('.function a').css('color', 'gray');
        $('.function a:hover').css('color', 'black');
        $('header').css('opacity', '1');
      } else {
        $('header').css('background-color', 'transparent');
        $('header').css('backdrop-filter', 'blur(20px)');
        $('header').css('opacity', '0.9');
        $('header').css('color', 'black');
        $('.function a').css('color', 'black');
      }
    });
  });