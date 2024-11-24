<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use StoutLogic\AcfBuilder\FieldsBuilder;

class App extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var array
   */
  protected static $views = ['*'];

  /**
   * Data to be passed to view before rendering.
   *
   * @return array
   */
  public function with()
  {
    return [
      'siteName' => $this->siteName(),
      'phone_text' => $this->get_phone(),
      'logo' => $this->get_logo(),
      'phone' => $this->get_phone(true),
      'email' => $this->get_email(),
      'socials' => $this->get_socials(),
      'copyright' => $this->get_copyright(),
    ];
  }

  public function get_copyright()
  {
    return get_field('general_copyright', 'option');
  }

  public function get_socials()
  {
    return get_field('social_list', 'option');
  }

  public function get_logo($class = '')
  {
    $logo_id = get_field('general_logo', 'option');

    return wp_get_attachment_image($logo_id, 'full', null, ['class' => $class]);
  }

  public function get_phone($sanitize = false)
  {
    if ($sanitize) {
      return str_replace(
        [')', '(', ' ', '-'],
        '',
        get_field('general_phone', 'option'),
      );
    }

    return get_field('general_phone', 'option');
  }

  public function get_email()
  {
    return get_field('general_email', 'option');
  }

  /**
   * Получение меню по его локации.
   */
  public function getMenu($location)
  {
    if (
      ($locations = get_nav_menu_locations()) &&
      isset($locations[$location])
    ) {
      return wp_get_nav_menu_items($locations[$location]);
    }

    return [];
  }

  /**
   * Returns the site name.
   *
   * @return string
   */
  public function siteName()
  {
    return get_bloginfo('name', 'display');
  }
}
