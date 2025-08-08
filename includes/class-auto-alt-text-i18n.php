<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/nicompiledev
 * @since      1.0.0
 *
 * @package    Auto_Alt_Text
 * @subpackage Auto_Alt_Text/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Auto_Alt_Text
 * @subpackage Auto_Alt_Text/includes
 * @author     nicompiledev <nsfranco21@gmail.com>
 */
class Auto_Alt_Text_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'auto-alt-text',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
