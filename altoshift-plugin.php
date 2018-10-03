<?php
/**
*
* @package AltoshiftPlugin
*/
/*
Plugin Name: Altoshift Plugin
Plugin URI: https://altoshift.com/plugin
Description: Learning Only Project.
Version: 1.0.0
Author: Eko Aprili Trisno "eatrisno"
Author URI: eatrisno.id
License: GPLv2 or later
Text Domain: altoshift-plugin
*/

defined( 'ABSPATH' ) or die( 'youre die human!' );


class AltoshiftPlugin {
	function __construct($args) {
		echo $args;
	}
}

if (class_exists('AltoshiftPlugin')){
	$altoshiftPlugin = new AltoshiftPlugin('plugin installed!');
}

// function customFunction($args){
// 	echo $args;
// }

// customFunction('hallo this is my world');