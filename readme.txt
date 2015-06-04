=== Wordpress Latest Posts by Ahsan ===
Contributors: Ahsan Rehman
Donate link: http://ahsanrehman.com/
Tags: posts, authors, categories, category, tags, tag, latest, post, author, wordpress, recent, recent post, latest posts
Requires at least: 2.8
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later

A plugin which enables you to get latest posts by authors, categories and tags, with featured images, excerpt, works for custom post types as well

== Description ==

This plugin allows you to display an unordered list of post (or custom post type) links (with title, featured image and exceprt) to a specific author (or multiple authors), category (or multiple categories) and tag (or multiple tags). It can be called either with a shortcode or from within a theme file.

To call it with a shortcode, use `[latest]` below are the attributes you can use with this shortcode: <br />
* Authors:<br />
`[latest author="username or multiple usernames separated by comma"]` <br />
* Category:<br />
`[latest category="category name or names separated by comma"]`  <br />
* Tag:<br />
`[latest tag="tag name or names separated by comma"]`  <br />
* Post Type:<br />
`[latest post_type="post type name"]`  <br />
* Show Posts:<br />
`[latest show="number of posts to show"]`  <br />
* Show Excerpt:<br />
`[latest excerpt="true (default is false)"]`  <br />
* Show Thumbnail:<br />
`[latest thumbnail="true (default is false)"]` 

To call it from within a theme template, you have to wrap it in this PHP function: `<?php echo do_shortcode('your shortcode goes here'); ?>`

== Installation ==

1. Upload the `wordpress-latest-posts-by-ahsan` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the `Plugins` menu in WordPress
1. Place `[latest]` in your posts or `<?php echo do_shortcode(`[latest]`); ?>` in your templates 

== Frequently Asked Questions ==

= No questions yet =

Really, none so far.

== Screenshots ==

No screenshots so far.

== Changelog ==

= 1.0 =
* First version, no changes yet.

== Upgrade Notice ==

* First version, no notice yet.