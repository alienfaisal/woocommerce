function wc_checkout_add_ons_conditionally_show_gift_add_on() {

    wc_enqueue_js( "
        $( '#wc_checkout_add_ons_2' ).change( function () {

            if ( $( this ).is( ':checked' ) ) {

                // show the gift checkout add-on -- replace '2' with the id of your add-on
                $( '#wc_checkout_add_ons_3_field' ).show();
		$( '#wc_checkout_add_ons_4_field' ).show();

            } else {

                // hide the gift checkout add-on -- replace '2' with the id of your add-on
                $( '#wc_checkout_add_ons_3_field' ).hide();
		$( '#wc_checkout_add_ons_4_field' ).hide();
            }

        } ).change();
    " );
}
add_action( 'wp_enqueue_scripts', 'wc_checkout_add_ons_conditionally_show_gift_add_on' );
