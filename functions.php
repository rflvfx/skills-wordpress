<?php
// Theme setup
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

// Remove version for security
remove_action('wp_head', 'wp_generator');

// Defer non-critical scripts
add_filter('script_loader_tag', function ($tag, $handle) {
    if (is_admin()) return $tag;
    return str_replace(' src', ' defer src', $tag);
}, 10, 2);
- Refactor module — iteration 2 (2015)
- Add example — iteration 7 (2015)
- Extend coverage — iteration 8 (2015)
