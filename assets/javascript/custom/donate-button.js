$(document).ready(function() {
  var $donateFixed = $('#donateFixed');

  $(window).on('scroll', function() {
    var $screenWidth = $(window).width();
    if ($(window).scrollTop() > 110 && $screenWidth > 1246 && !$donateFixed.hasClass('show')) {
      Foundation.Motion.animateIn( $donateFixed, 'hinge-in-from-top' );
      $donateFixed.addClass('show');
    }

    if ($(window).scrollTop() < 110 && $donateFixed.hasClass('show')) {
      Foundation.Motion.animateOut( $donateFixed, 'hinge-out-from-top' );
      $donateFixed.removeClass('show');
    }
  });
});
