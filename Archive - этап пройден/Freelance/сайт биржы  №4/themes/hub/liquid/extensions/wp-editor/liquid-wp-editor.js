jQuery( document ).ready( function( $ ) {

    $('#link-options').append( '<div><label><span>Link Style</span><select name="wpse-link-class" id="wpse_link_class"><option value="">None</option><option value="bar-fill-hover">Bar Fill</option><option value="skewed-underline">Skewed Underline</option><option value="skewed-underline-light">Skewed Underline Light</option><option value="curtain-hover">Curtain Hover</option><option value="upline-hover">Upline Hover</option></select></label></div>' );

    wpLink.getAttrs = function() {
        wpLink.correctURL();        
        return {
            class:      $( '#wpse_link_class' ).val(),
            href:       $.trim( $( '#wp-link-url' ).val() ),
            target:     $( '#wp-link-target' ).prop( 'checked' ) ? '_blank' : ''
        };
    }

});