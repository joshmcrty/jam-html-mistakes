/**
 * Uses jQuery to add classes to HTML elements to highlight potential issues
 */
;( function( $ ) {
	$( document ).ready( function() {
		
		// Empty HTML elements
		$( 'div:empty, span:empty, li:empty, p:empty, td:empty, th:empty' ).filter( function( index ) {
			return $( this ).closest( '#wpadminbar' ).length === 0;
		}).addClass( 'jam-html-mistakes jam-html-mistakes-warning jam-html-mistakes-padding' ).each( function() {
			var notice = $( this ).attr( 'title' );
			if ( typeof notice !== "undefined" ) {
				notice += "/\n***Empty HTML element***";
			}
			else {
				notice = "***Empty HTML element***";
			}
			$( this ).attr( 'title', notice );
		});
		
		// Empty attributes
		$( '*[alt=""], *[title=""], *[class=""], *[id=""], a[href=""], a[href="#"]' ).filter( function( index ) {
			return $( this ).closest( '#wpadminbar' ).length === 0;
		}).addClass( 'jam-html-mistakes jam-html-mistakes-warning' ).each( function() {
			var notice = $( this ).attr( 'title' );
			if ( typeof notice !== "undefined" ) {
				notice += "/\n***Empty attribute***";
			}
			else {
				notice = "***Empty attributes***";
			}
			$( this ).attr( 'title', notice );
		});
		
		// Deprecated HTML elements
		$( 'applet, basefont, center, dir, font, isindex, menu, s, strike, u' ).filter( function( index ) {
			return $( this ).closest( '#wpadminbar' ).length === 0;
		}).addClass( 'jam-html-mistakes jam-html-mistakes-solid jam-html-mistakes-error' ).each( function() {
			var notice = $( this ).attr( 'title' );
			if ( typeof notice !== "undefined" ) {
				notice += "/\n***Deprecated HTML Element***";
			}
			else {
				notice = "***Deprecated HTML Element***";
			}
			$( this ).attr( 'title', notice );
		});
		
		// Deprecated attributes
		$( '*[background], *[bgcolor], *[clear], *[color], *[compact], *[noshade], *[nowrap], *[size], *[start], *[bottommargin], *[leftmargin], *[rightmargin], *[topmargin], *[marginheight], *[marginwidth], *[alink], *[link], *[text], *[vlink], *[align], *[valign], *[hspace], *[vspace], :not(img)[height], :not(img)[width], ul[type], ol[type], li[type]' ).filter( function( index ) {
			return $( this ).closest( '#wpadminbar' ).length === 0;
		}).addClass( 'jam-html-mistakes jam-html-mistakes-solid jam-html-mistakes-error' ).each( function() {
			var notice = $( this ).attr( 'title' );
			if ( typeof notice !== "undefined" ) {
				notice += "/\n***Deprecated attribute***";
			}
			else {
				notice = "***Deprecated attribute***";
			}
			$( this ).attr( 'title', notice );
		});
		
	});
})( jQuery );