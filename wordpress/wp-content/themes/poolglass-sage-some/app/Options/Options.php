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
        'label' => pll__('General'),
      ])
      ->addGroup('general', [
        'label' => pll__('General'),
        'layout' => 'block',
      ])
      ->addImage('logo', [
        'label' => pll__('Logo'),
        'wrapper' => [
          'width' => '20',
        ],
        'return_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ])
      ->addText('phone', [
        'label' => pll__('Phone'),
        'wrapper' => [
          'width' => '25',
        ],
      ])
      ->addEmail('email', [
        'label' => pll__('Email'),
        'wrapper' => [
          'width' => '25',
        ],
      ])
      ->addTextarea('address', [
        'label' => pll__('Address'),
        'wrapper' => [
          'width' => '30',
        ],
        'rows' => '2',
      ])
      ->addText('copyright', [
        'label' => pll__('Copyright'),
        'wrapper' => [
          'width' => '100',
        ],
      ])
      ->endGroup()

      ->addGroup('social', [
        'label' => pll__('Social'),
        'layout' => 'block',
      ])

      ->addRepeater('list', [
        'label' => pll__('Social List'),
        'wrapper' => [
          'width' => '100',
        ],
        // 'collapsed' => 'list_title',
        'layout' => 'block',
      ])
      ->addText('url', [
        'label' => pll__('Url'),
        'wrapper' => [
          'width' => '50',
        ],
      ])
      ->addText('icon_name', [
        'label' => pll__('Icon Name'),
        'wrapper' => [
          'width' => '50',
        ],
      ])
      ->endRepeater()

      ->endGroup()

      ->addTab('metriks', [
        'label' => pll__('Кастомные скрипты'),
      ])
      ->addRepeater('custom_scripts_list', [
        'label' => pll__('Скрипты'),
        'wrapper' => [
          'width' => '100',
        ],
        // 'collapsed' => 'list_title',
        'layout' => 'block',
      ])
      ->addTextarea('script', [
        'label' => pll__('Script'),
        'wrapper' => [
          'width' => '100',
        ],
        'rows' => '6',
      ])
      ->endRepeater();

    return $fields->build();
  }
}
