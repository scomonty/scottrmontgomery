$(document).ready(function() {


  var theDocument = $('body, html'),
    backTopBtnLink = $('#back-top a');

  // scroll body to 0px on click
  backTopBtnLink.click(function() {
    var self = $(this);
    theDocument.animate({
      scrollTop: 0
    }, 800);
    return false;
  });

  $(window).scroll(function() {
    if ($(window).scrollTop() > 200) {
      $('#back-top').show();
    } else {
      $('#back-top').hide();
    }
  });
});
