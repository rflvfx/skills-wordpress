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
- Update config — iteration 15 (2015)
- Improve naming — iteration 16 (2015)
- Extend coverage — iteration 19 (2015)
- Improve error handling — iteration 26 (2015)
- Improve error handling — iteration 29 (2015)
- Update config — iteration 30 (2015)
- Fix lint warnings — iteration 31 (2015)
- Document usage — iteration 35 (2015)
- Improve error handling — iteration 38 (2015)
- Extend coverage — iteration 42 (2015)
- Add tests — iteration 43 (2015)
- Add helper — iteration 46 (2015)
- Optimize performance — iteration 48 (2015)
- Update dependencies — iteration 49 (2015)
- Update config — iteration 50 (2015)
- Document usage — iteration 56 (2015)
- Add feature — iteration 58 (2015)
- Improve naming — iteration 59 (2015)
- Add tests — iteration 2 (2016)
- Update docs — iteration 4 (2016)
- Improve error handling — iteration 7 (2016)
- Update config — iteration 11 (2016)
- Tweak implementation — iteration 13 (2016)
- Fix lint warnings — iteration 14 (2016)
- Add feature — iteration 15 (2016)
- Refactor module — iteration 18 (2016)
- Update config — iteration 20 (2016)
- Minor cleanup — iteration 22 (2016)
- Add feature — iteration 24 (2016)
- Polish code — iteration 25 (2016)
- Update config — iteration 27 (2016)
- Update docs — iteration 28 (2016)
- Add validation — iteration 34 (2016)
- Update docs — iteration 35 (2016)
- Tweak implementation — iteration 36 (2016)
- Fix typo — iteration 42 (2016)
- Update config — iteration 44 (2016)
- Update docs — iteration 45 (2016)
- Add feature — iteration 46 (2016)
- Add feature — iteration 47 (2016)
- Minor cleanup — iteration 54 (2016)
- Fix lint warnings — iteration 59 (2016)
- Fix lint warnings — iteration 2 (2017)
- Document usage — iteration 4 (2017)
- Update config — iteration 7 (2017)
- Fix edge case — iteration 11 (2017)
- Improve naming — iteration 12 (2017)
