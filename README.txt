=== Dequeue Google Fonts ===
Contributors: thomaswm
Tags: Google Fonts
Requires at least: 4.1
Tested up to: 4.2
License: GPL
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Prevents WordPress from loading Google Fonts CSS

== Description ==
This plugin loops through all CSS files that have been enqueued using `wp_enqueue_style()` and if it detects a CSS file from Google Fonts, then the plugin prevents WordPress from embedding this file in the HTML sourcecode.