<?php

/**
 * Theme filters.
 */

namespace App;

add_action('admin_head', function () {
    echo '<style>
      .interface-complementary-area__fill{ width: 450px !important; }
       .interface-complementary-area,
       interface-complementary-area editor-sidebar {
       width: 100% !important;
}
  </style>';
});

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(
        ' &hellip; <a href="%s">%s</a>',
        get_permalink(),
        pll__('Continued', 'sage'),
    );
});

/**
 * Load script assets as module during development.
 *
 * @param  string  $tag
 * @param  string  $handle
 * @param  string  $src
 * @return string
 */
add_filter(
    'script_loader_tag',
    function ($tag, $handle, $src) {
        $namespace = strtolower(wp_get_theme()->get('Name'));

        // Check if is dev or prod also check if the script is the app theme script
        if (
            (hmr_enabled() && $namespace === $handle) ||
            (! hmr_enabled() && str_contains($handle, 'app/'))
        ) {
            $tag = str_replace(' src', ' type="module" src', $tag);
        }

        return $tag;
    },
    10,
    3,
);

/**
    Change nav item class
 */
add_filter(
    'nav_menu_css_class',
    function ($classes, $item, $args) {
        $classes[] = 'nav__item';

        return $classes;
    },
    1,
    3,
);

/**
  Change nav link class
 */
add_filter(
    'nav_menu_link_attributes',
    function ($atts, $item, $args, $depth) {
        $atts['class'] = 'nav__link';

        return $atts;
    },
    10,
    4,
);

/**
 * Disable auto-p for Contact Form 7.
 *
 * @see https://contactform7.com/2017/03/22/auto-p-and-label-element/
 *
 * @param  bool  $autop  Whether to use autop or not.
 * @return bool
 */
add_filter('wpcf7_autop_or_not', '__return_false');

add_action('wpcf7_init', function () {
    $fields = [
        'window_shape',
        'window_diameter',
        'window_width',
        'window_height',
        'water_level',
        'window_count',
        'pool_finish',
        'special_wishes',
        'custom_special_wishes',
    ];

    foreach ($fields as $field) {
        wpcf7_add_form_tag($field, function ($tag) use ($field) {
            return '<input type="hidden" name="'.
              esc_attr($field).
              '" x-bind:value="'.
              esc_attr($field).
              '">';
        });
    }
});
