//Smooth scrolling

$('.navbar a, .h4-links a').on('click', function(e) {
    // e.preventDefault()
    
      $('html, body').animate(
        {
          scrollTop: $($(this).attr('href')).offset().top -50,
        },
        500,
        'linear'
      )
    });
  
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) $('.scrollup').fadeIn();
      else $('.scrollup').fadeOut();
  });



