jQuery( document ).ready( function() {
  var owl = jQuery( '.owl-carousel' );
  owl.owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
      0: {
        items:1
      },
      576: {
        items:2
      },
      768: {
        items:3
      },
      1200: {
        items:4
      }
    }
  });
  jQuery( '.play' ).on( 'click', function() {
    owl.trigger( 'play.owl.autoplay', [1000] );
  });
  jQuery( '.stop' ).on( 'click', function() {
    owl.trigger( 'stop.owl.autoplay' );
  });
});
