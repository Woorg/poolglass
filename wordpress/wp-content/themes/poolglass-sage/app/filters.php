<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
  return sprintf(
    ' &hellip; <a href="%s">%s</a>',
    get_permalink(),
    __('Continued', 'sage'),
  );
});

/**
 * Load script assets as module during development.
 *
 * @param string $tag
 * @param string $handle
 * @param string $src
 *
 * @return string
 */
add_filter(
  'script_loader_tag',
  function ($tag, $handle, $src) {
    $namespace = strtolower(wp_get_theme()->get('Name'));

    // Check if is dev or prod also check if the script is the app theme script
    if (
      (hmr_enabled() && $namespace === $handle) ||
      (!hmr_enabled() && str_contains($handle, 'app/'))
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
