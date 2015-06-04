<?php
/**
 * Plugin Name: WordPress Latest Posts by Ahsan
 * Plugin URI: http://ahsanrehman.com
 * Description: A plugin which enables you to get latest posts by authors, categories and tags as well, also you can enable featured images and excerpt, this plugin can be use for custom post types.
 * Version: 1.0
 * Author: Ahsan Rehman
 * Author URI: http://ahsanrehman.com
 */
function wordpress_latest_posts_by_ahsan($inserted_attrs) {
    require_once('includes/wordpress-latest-posts-by-ahsan-core.php' );
}
add_shortcode('latest', 'wordpress_latest_posts_by_ahsan');