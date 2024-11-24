<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class FrontPage extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var string[]
   */
  protected static $views = ['front-page'];

  /**
   * Data to be passed to view before rendering.
   *
   * @return array
   */
  public function with()
  {
    // $args = array(
    //     'post_type' => 'pokemons',
    //     'posts_per_page' => 10,
    //     'orderby' => 'title',
    //     'order' => 'DESC'
    // );

    // $query = new WP_Query( $args );

    return [
        // 'phone' => get_field('general', 'option');,
        // 'pokemons' => $query->posts,
      ];
  }
}
