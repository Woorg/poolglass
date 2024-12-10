<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class Options extends Field
{
  /**
   * The option page menu name.
   *
   * @var string
   */
  public $name = 'Options';

  /**
   * The option page document title.
   *
   * @var string
   */
  public $title = 'Опции сайта | Theme Options';

  /**
   * The option page field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('options');

    $fields
      ->addTab('general', [
        'label' => __('General'),
      ])
      ->addGroup('general', [
        'label' => __('General'),
        'layout' => 'block',
      ])
      ->addImage('logo', [
        'label' => __('Logo'),
        'wrapper' => [
          'width' => '20',
        ],
        'return_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ])
      ->addText('phone', [
        'label' => __('Phone'),
        'wrapper' => [
          'width' => '25',
        ],
      ])
      ->addEmail('email', [
        'label' => __('Email'),
        'wrapper' => [
          'width' => '25',
        ],
      ])
      ->addTextarea('address', [
        'label' => __('Address'),
        'wrapper' => [
          'width' => '30',
        ],
        'rows' => '2',
      ])
      ->addText('copyright', [
        'label' => __('Copyright'),
        'wrapper' => [
          'width' => '100',
        ],
      ])
      ->endGroup()

      ->addGroup('social', [
        'label' => __('Social'),
        'layout' => 'block',
      ])

      ->addRepeater('list', [
        'label' => __('Social List'),
        'wrapper' => [
          'width' => '100',
        ],
        // 'collapsed' => 'list_title',
        'layout' => 'block',
      ])
      ->addText('url', [
        'label' => __('Url'),
        'wrapper' => [
          'width' => '50',
        ],
      ])
      ->addText('icon_name', [
        'label' => __('Icon Name'),
        'wrapper' => [
          'width' => '50',
        ],
      ])
      ->endRepeater()

      ->endGroup()

      ->addTab('metriks', [
        'label' => __('Кастомные скрипты'),
      ])
      ->addRepeater('custom_scripts_list', [
        'label' => __('Скрипты'),
        'wrapper' => [
          'width' => '100',
        ],
        // 'collapsed' => 'list_title',
        'layout' => 'block',
      ])
      ->addTextarea('script', [
        'label' => __('Script'),
        'wrapper' => [
          'width' => '100',
        ],
        'rows' => '6',
      ])
      ->endRepeater();

    return $fields->build();
  }
}
