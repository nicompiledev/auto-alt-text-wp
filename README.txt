=== Plugin Name ===
Contributors: nicompiledev
Donate link: https://github.com/nicompiledev/
Tags: alt text, seo, images, media, automate, image optimization
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Auto Alt Text is a simple plugin that automatically generates alternative text for images.

== Description ==

This plugin, Auto Alt Text, automatically generates alternative text (alt text) for images when they are uploaded to the WordPress media library.

It works by extracting the image's filename, cleaning it up (removing extensions, replacing dashes with spaces), and setting it as the alt text. This is a great practice for improving the accessibility and SEO of your website without manual effort.

Features:
* Automatically generates alt text from the image filename.
* Cleans filenames to create readable alt text (e.g., "my-image-file.jpg" becomes "My Image File").
* Prevents overwriting alt text if it has been manually entered by the user.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the `auto-alt-text` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. The plugin will start working automatically on all new images uploaded to the media library. There are no settings to configure.

== Frequently Asked Questions ==

= Does this plugin affect existing images? =

No, this plugin only works on new images uploaded after the plugin has been activated. It will not modify the alt text of any existing images in your media library.

= Is the generated alt text good for SEO? =

Yes. While manually writing descriptive alt text is always best, this plugin ensures that your images have descriptive alt text instead of being left empty. This is a significant improvement for both SEO and accessibility.

= What if I want to manually change the alt text? =

You can still manually edit the alt text for any image in the media library. The plugin will not overwrite a manually entered alt text.

== Screenshots ==

1. A screenshot showing how the alt text is automatically generated after uploading an image.
2. A second screenshot showing a clean alt text from a filename with numbers at the end.

== Changelog ==

= 1.0.0 =
* Initial release of the plugin.
* Automatically generates alt text from image filenames.
* Skips generation if alt text is already set.

== Upgrade Notice ==

= 1.0.0 =
Initial release. No upgrade notice is needed.

== Plugin Structure and Future Vision ==

This plugin adheres to the structure of a professional WordPress plugin to ensure scalability and maintainability. Below is a breakdown of the files and directories and how they will be used in future versions:

* **`auto-alt-text.php`**: The main file. It currently contains all the logic, but in future versions, it will be used mainly to load the plugin's classes and functions.
* **`includes/`**: This directory will house the main logic, such as classes that handle connections to external APIs or image processing logic. For example, in a future version that integrates language models (LLM) to analyze images, the class that manages communication with the API would be located here.
* **`admin/`**: Will contain the code for the admin interface. An advanced version could have a settings page for users to configure the LLM API or text generation rules.
* **`public/`**: Will store scripts and styles needed for the frontend if the plugin requires them in the future.
* **`languages/`**: Will be used for translation files, allowing the plugin to be compatible with other languages.
* **`uninstall.php`**: Will contain the logic to clean up the plugin's data upon uninstallation.

This structure allows me to start with a basic and functional version, with a clear path for future improvements without compromising the current code.