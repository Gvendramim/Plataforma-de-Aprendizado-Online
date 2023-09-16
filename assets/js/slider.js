$(document).ready(function(){
    $('.slider').slick({
      arrows: false,
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });

    $('#prevBtn').on('click', function() {
      $('.slider').slick('slickPrev');
    });

    $('#nextBtn').on('click', function() {
      $('.slider').slick('slickNext');
    });
  });