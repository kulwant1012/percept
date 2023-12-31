// source --> https://www.perceptsystems.com/wp-content/plugins/social-pug/assets/js/front-end.js?ver=5.3.14 
jQuery( function($) {

	/**
	 * Pull share counts
	 *
	 */
	$(document).ready( function() {

		if( typeof dpsp_ajax_url != 'undefined' && typeof dpsp_ajax_pull_post_share_counts_data != 'undefined' ) {

			$.post( dpsp_ajax_url, dpsp_ajax_pull_post_share_counts_data, function( response ) { });

		}

	});

	
	/*
	 * Position sidebar icons vertically
	 *
	 */
	$(document).ready( function() {
		$('#dpsp-floating-sidebar').css('top', ( window.innerHeight - $('#dpsp-floating-sidebar').height() ) / 2 );
	});

	$(window).on( 'resize', function() {
		$('#dpsp-floating-sidebar').css('top', ( window.innerHeight - $('#dpsp-floating-sidebar').height() ) / 2 );
	});


	/**
	 * When entering and leaving a button, add a class of hover to the wrapping <li> element
	 *
	 */
	$(document).on( 'mouseenter', '.dpsp-networks-btns-wrapper li a', function(e) {

		$(this).closest('li').addClass('dpsp-hover');

	});

	$(document).on( 'mouseleave', '.dpsp-networks-btns-wrapper li a', function() {

		$(this).closest('li').removeClass('dpsp-hover');

	});


	/*
	 * Open Pinterest overlay to select which image to pin when
	 * clicking on a Pin button without media attached
	 *
	 */
	$(document).ready( function() {
		$('.dpsp-network-btn.dpsp-pinterest').click( function(e) {

			if( $(this).attr('href') != '#' )
				return false;

			e.preventDefault();

			var elem = document.createElement('script');
			elem.setAttribute('type', 'text/javascript');
			elem.setAttribute('charset', 'UTF-8');
			elem.setAttribute('src', 'https://assets.pinterest.com/js/pinmarklet.js');
			document.body.appendChild(elem);

		});
	});


	/**
	 * Print button action
	 *
	 */
	$(document).ready( function() {
		$('.dpsp-network-btn.dpsp-print').click( function(e) {
			window.print();
		});
	});


	/**
	 * Open share links in a pop-up window
	 *
	 */
	$(document).on( 'click', '.dpsp-network-btn', function(e) {

		if( $(this).hasClass('dpsp-twitter') && typeof window.twttr != 'undefined' )
			return;

		if( $(this).hasClass('dpsp-email') )
			return;

		e.preventDefault();

		if( $(this).attr('href') == '#' )
			return false;

		$(this).blur();

		window.open( $(this).attr('href'),'targetWindow', "toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=700,height=300,top=200,left=" + ($(window).innerWidth() - 700)/2 );

	});

});