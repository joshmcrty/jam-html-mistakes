<?php
/*
Plugin Name: JAM HTML Mistakes
Plugin URI: http://joshmccarty.com
Description: Highlights mistakes in HTML using advanced CSS selectors.
Version: 0.1
Author: Josh McCarty
Author URI: http://joshmccarty.com
License: GPL v2
*/

/*  Copyright 2012 Josh McCarty  (email : josh@joshmccarty.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Enable internationalization
load_plugin_textdomain( 'jam-html-mistakes', false, basename( dirname( __FILE__ ) ) . '/languages' );

/**
 * Styles based on CSS Diagnostics (http://css-tricks.com/snippets/css/css-diagnostics/)
 */
function jam_html_mistakes() {
	
	if ( ! is_user_logged_in() && ! is_admin() ) {
		return;
	}
	else {
	
	?><style type="text/css">
		/* Empty Elements */
		div:empty, span:empty, li:empty, p:empty, td:empty, th:empty
		{ border: 20px; border: 5px dotted yellow !important; }

		/* Empty Attributes */
		*[alt=""], *[title=""], *[class=""], *[id=""], a[href=""], a[href="#"]
		{ border: 5px solid yellow !important; }

		/* Deprecated Elements */
		applet, basefont, center, dir, font, isindex, menu, s, strike, u
		{ border: 5px dotted red !important; }

		/* Deprecated Attributes */
		*[background], *[bgcolor], *[clear], *[color], *[compact], *[noshade], *[nowrap], *[size], *[start],
		*[bottommargin], *[leftmargin], *[rightmargin], *[topmargin], *[marginheight], *[marginwidth], *[alink], *[link], *[text], *[vlink],
		*[align], *[valign],
		*[hspace], *[vspace],
		:not(img)[height], :not(img)[width],
		ul[type], ol[type], li[type]
		{ border: 5px solid red !important; }

		/* Proposed Deprecated Elements */
		input[type="button"], big, tt
		{ border: 2px dotted #33FF00 !important; }

		/* Proposed Deprecated Attributes */
		*[border], a[target], table[cellpadding], table[cellspacing], *[name]
		{ border: 2px solid #33FF00 !important; }
	</style>'<?php
	}
}
add_action( 'wp_head', 'jam_html_mistakes' );
?>