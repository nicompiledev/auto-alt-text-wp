<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link             https://github.com/nicompiledev/auto-alt-text-wp
 * @since            1.0.0
 * @package          Autocomplete_Alt_Text
 *
 * @wordpress-plugin
 * Plugin Name:      Autocomplete Alt Text
 * Plugin URI:       https://github.com/nicompiledev/auto-alt-text-wp
 * Description:      This is a simple WordPress plugin that automatically generates alternative text for images uploaded to your media library.
 *
 * The plugin extracts the image's filename, cleans it up, and uses it as the alt text. This ensures all your images have descriptive alternative text, which is a great SEO practice.
 * Version:          1.0.0
 * Author:           nicompiledev
 * Author URI:       https://github.com/nicompiledev/
 * License:          GPL-2.0+
 * License URI:      http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:      autocomplete-alt-text
 * Domain Path:      /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Automatically generates the alt text for an image from its filename
 * when it is uploaded to the media library.
 *
 * @param int $attachment_id Attachment ID.
 */
function auto_image_alt_from_filename( $attachment_id ) {
	// Only process if it is an image.
	if ( ! wp_attachment_is_image( $attachment_id ) ) {
		return;
	}

	// Get the current alt text to avoid overwriting if it already exists.
	$current_alt_text = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
	if ( ! empty( $current_alt_text ) ) {
		return;
	}

	// Get the file URL and filename.
	$attachment_url = wp_get_attachment_url( $attachment_id );
	$file_name      = basename( $attachment_url );

	// Clean the filename: remove the extension and replace dashes and underscores with spaces.
	$file_name_without_extension = pathinfo( $file_name, PATHINFO_FILENAME );
	$alt_text                    = ucwords( str_replace( array( '-', '_' ), ' ', $file_name_without_extension ) );

	// If the filename is not empty, update the alt text.
	if ( ! empty( $alt_text ) ) {
		update_post_meta( $attachment_id, '_wp_attachment_image_alt', sanitize_text_field( $alt_text ) );
	}
}

add_action( 'add_attachment', 'auto_image_alt_from_filename' );