<?php

/**
 * Helper class for child theme functions.
 *
 * @class FLChildTheme
 */
final class FLChildTheme
{
    /**
     * Enqueues scripts and styles.
     *
     * @return void
     */
    public static function enqueue_scripts()
    {
        $css_file = get_stylesheet_directory() . '/build/bdsa-styles.min.css';
        wp_enqueue_style('fl-child-theme', FL_CHILD_THEME_URL . '/build/bdsa-styles.min.css', null, filemtime($css_file));
    }
}
