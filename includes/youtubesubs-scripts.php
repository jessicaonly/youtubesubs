<?php
//add scripts
//all functions should have a consistent domain
function yts_add_scripts(){
  //Add Main CSS
  wp_enqueue_style('yts-main-style', plugins_url(). '/youtubesubs/css/style.css');
  //Add Main JS
  wp_enqueue_script('yts-main-script', plugins_url(). '/youtubesubs/js/main.css');
}

add_action('wp_enqueue_scripts', 'yts_add_scripts');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');
