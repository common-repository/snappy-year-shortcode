=== Snappy Year Shortcode ===
Contributors: miniweblab
Tags: current year, copyright symbol, year, copyright, shortcode, current year shortcode
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=robert.ekbauer%40gmail.com&currency_code=USD&source=url
Requires at least: 2.5
Tested up to: 5.2.1
Requires PHP: 5.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The easiest way displaying current year, copyright symbol and since year with shortcode.

== Description ==
The easiest way displaying current year and copyright symbol and since year in your copyright footer text or wherever else you like on your site. 
Just use shortcodes **[Y]** for current year and **[C]** for copyright symbol after plugin activation.

If you need to display the current year, and have it always kept up to date, inserting this plugin’s **[y]** or **[y]** shortcode anywhere on your web site will do just that.

If you need to display an official Copyright notice, inserting this plugin’s **[C]** or **[c]** shortcode provides the official C with a circle around it (“©”) required legally in many countries to Copyright many forms of intellectual property.

**Other shortcodes of this plugin:**
* Use [cy] or [CY] to display copyright symbol © and the current year together.
* Use [cc] or [CC] to display copyright symbol © and the word “Copyright”.
* Use [csy since=”2016″] to display the symbol of copyright, first year and current year (Assuming it is currently the year 2019 ex. © 2016-2019).
* Use [ccsy since=”2016″] to display the symbol of copyright (©) and the word “Copyright”, first year and current year (Assuming it is currently the year 2019 ex. © Copyright 2016-2019).



== Installation ==
1. Upload the plugin files to the "/wp-content/plugins/snappy-year-shortcode" directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the "Plugins" menu in WordPress.
1. Place one or more shortcodes in the footer copyright text or anywhere else on your site to display the actual year and/or copyright symbol.

== Frequently Asked Questions ==
= What are the shortcodes? =
* Use [y] or [Y] to display current year.
* Use [c] or [C] to display copyright symbol ©.
* Use [cy] or [CY] to display copyright symbol © and the current year together.
* Use [cc] or [CC] to display copyright symbol © and the word “Copyright”.
* Use [csy since=”2016″] to display the symbol of copyright, first year, current year (Assuming it is currently the year 2019 ex. © 2016-2019).
* Use [ccsy since=”2016″] to display the symbol of copyright (©) and the word “Copyright”, first year, current year (Assuming it is currently the year 2019 ex. © Copyright 2016-2019).

= How since year work? =
Shortcode with since year works through attribute since=””. It supports numbers only (ex. since="2016").
You must enter since attribute for first year.

Example (assuming it is currently the year 2019):
[csy since="2016"] outputs © 2016-2019
[ccsy since="2016"] outputs © Copyright 2016-2019

== Changelog ==
= 1.0 =
* Initial release.

= 2.0 =
* Shortcodes and since attribute functionality added.