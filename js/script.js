$(function () { // Same as document.addEventListener("DOMContentLoaded"...

  // Same as document.querySelector("#navbarToggle").addEventListener("blur",...
  $("#navbarToggle").blur(function (event) {
    var screenWidth = window.innerWidth;
    if (screenWidth < 768) {
      $("#collapsable-nav").collapse('hide');
    }
  });

    $("#navbarToggle").click(function (event) {
    $(event.target).focus();
  });
});

$(function() {
  let header = $('.header_main');
   
  $(window).scroll(function() {
    if($(this).scrollTop() > 1) {
     header.addClass('header_fixed');
    } else {
     header.removeClass('header_fixed');
    }
  });
}); 


$(function() {
  let header = $('.header_main');
  let hederHeight = header.height(); // вычисляем высоту шапки
   
  $(window).scroll(function() {
    if($(this).scrollTop() > 1) {
     header.addClass('header_fixed');
     $('body').css({
        'paddingTop': hederHeight+'px' // делаем отступ у body, равный высоте шапки
     });
    } else {
     header.removeClass('header_fixed');
     $('body').css({
      'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
     })
    }
    if($(this).scrollTop() > 940) {
      header.css({
        'opacity': '1'
      });
    } else {
    header.css({
      'opacity': '0.7'
    });
  }
  });

  
});

 