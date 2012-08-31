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
 *
 * Proposed Deprecated Elements
 * input[type="button"], big, tt { border: 2px dotted #33FF00 !important; }
 * 
 * Proposed Deprecated Attributes
 * *[border], a[target], table[cellpadding], table[cellspacing], *[name] { border: 2px solid #33FF00 !important; }
 * 
 */

/**
 * Enqueue scripts and styles
 */
function jam_html_mistakes() {
	
	if ( ! is_user_logged_in() && ! is_admin() ) {
		return;
	}
	else {
		wp_register_style( 'jam-html-mistakes-style', plugins_url('jam-html-mistakes.css', __FILE__), false, '20120830' );
		wp_enqueue_style( 'jam-html-mistakes-style' );

		wp_register_script( 'jam_html_mistakes', plugins_url( 'jam-html-mistakes.js', __FILE__ ), array( 'jquery' ), '20120830', false );
		wp_enqueue_script( 'jam_html_mistakes' );
	}
}
add_action( 'wp_enqueue_scripts', 'jam_html_mistakes' );
?>