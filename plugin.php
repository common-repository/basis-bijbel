<?php
/*
Plugin Name: BasisBijbel
plugin URI: https://wordpress.org/plugins/basis-bijbel/screenshots/
Description: Heb je een eigen website met verwijzingen naar bijbelteksten, dan kun je daar nu popups bij krijgen met daarin het bijbelvers uit de BasisBijbel.
Version: 1.1
Author: BasisBijbel
Author URI: https://www.basisbijbel.nl/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
if(!defined('ABSPATH'))
	die();

function enqueue_basic_bible_scripts() {
	wp_register_script('basic-bible-script', 'https://www.basisbijbel.nl/scan', array('jquery'), '1.11', false);
	wp_enqueue_script('basic-bible-script');
}

add_action('wp_enqueue_scripts', 'enqueue_basic_bible_scripts');