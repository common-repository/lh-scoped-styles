=== LH Scoped Styles ===
Donate link: https://lhero.org/portfolio/lh-scoped-styles/
Tags: styles, style, css, html5, scoped
Contributors: shawfactor
Author: shawfactor
Requires at least: 3.0.
Tested up to: 5.1
Stable tag: trunk

== Description ==
This plugin allows users to easily add a simple user registration form anywhere on their site using a simple shortcode. New users will be automatically logged in after registration. 
 

* to add the scoped styles into your content add the below shortcode in your page or post content area
`
[lh_scoped_styles-scoped_element]

and specify the two attributes namely

wrapper: which is the html tag the scoped styles are wrapped in

and

styles: which are the styles that are scoped within the above wrapper

and then enclose the the content within the shortcode, remebering to close the shortcode. A example is here:

[lh_scoped_styles-scoped_element wrapper="div" style=".screen_only { display : none; } @media screen{ .screen_only { display : block; } }"]


<p class="screen_only"><a href="https://princesparktouch.com/individual-players/switch/sign-up/"> <button class="button button-blue button-bordered">Sign up here</button></a></p>


[/lh_scoped_styles-scoped_element]

The above hides the element for non screen interactions (e.g. print)
`
== Installation ==
1. Upload the folder "lh-scoped-styles" to "/wp-content/plugins/"
2. Activate the plugin through the "Plugins" menu in WordPress
3. Use the shortcode

== Changelog ==

**1.00 September 05, 2019**  
Initial release.