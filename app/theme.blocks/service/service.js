jQuery( document ).ready( function() {
  jQuery( '.service__frame, .service__name' ).click( function() {
    jQuery( '.service__frame, .service__name' ).css({
      'cursor': 'auto'
    });
    jQuery( this ).parent( '.service__one' ).css({
      'zIndex': '600'
    });
    jQuery( this ).parent( '.service__one' ).find( '.service__shut' ).fadeIn( 600 );
    jQuery( this ).parent( '.service__one' ).find( '.service__description' ).fadeIn( 600 );
    jQuery( '#service__overlay' ).fadeIn( 600 );
  });
  jQuery( '.service__shut' ).click( function() {
    jQuery( '.service__frame, .service__name' ).css({
      'cursor': 'pointer'
    });
    jQuery( this ).parent( '.service__one' ).css({
      'zIndex': '1'
    });
    jQuery( this ).parent( '.service__one' ).find( '.service__shut' ).hide();
    jQuery( this ).parent( '.service__one' ).find( '.service__description' ).fadeOut( 400 );
    jQuery( '#service__overlay' ).fadeOut( 400 );
  });
  jQuery( '#service__overlay' ).click( function() {
    jQuery( '.service__frame, .service__name' ).css({
      'cursor': 'pointer'
    });
    jQuery( '.service__one' ).css({
      'zIndex': '1'
    });
    jQuery( '.service__shut' ).hide();
    jQuery( '.service__description' ).fadeOut( 400 );
    jQuery( '#service__overlay' ).fadeOut( 400 );
  });
});
