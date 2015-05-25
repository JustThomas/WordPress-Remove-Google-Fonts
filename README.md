# WordPress-Remove-Google-Fonts
WordPress plugin to prevent WordPress from loading Google Fonts

## Description ##
The purpose of this plugin is pretty much the same as with the "[Disable Google Fonts](https://wordpress.org/plugins/disable-google-fonts/)" plugin. It aims at preventing WordPress from embedding CSS files from the Google Fonts servers. 

The difference is that the "Disable Google Fonts" plugin only removes Google Fonts that are loaded by WordPress itself or by one of the bundled themes "Twenty Thirteen", "Twenty Fourteen" or "Twenty Fifteen".

This plugin takes a different approach. It uses the `style_loader_src` filter provided by WordPress to remove  all Google Fonts CSS files that have been enqueued using the `wp_enqueue_style()` function. 

**Note:** Some themes and plugins may include Google Fonts without ever using the `wp_enqueue_style` function. In such cases, this plugin is *not* able to prevent WordPress from loading the fonts from the Google server. So you have to check for yourself if this plugin works for you.