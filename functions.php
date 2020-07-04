<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

add_action ('fl_before_footer', 'madcow_custom_footer');
function madcow_custom_footer() { 
get_template_part( 'partials/custom', 'footer' );
}
add_action('wp_head', 'madcow_custom_head_content');
function madcow_custom_head_content() {
    ?>
<script src="https://kit.fontawesome.com/53df709142.js" crossorigin="anonymous"></script>
    <?php
}
