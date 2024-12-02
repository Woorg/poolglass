<?php

namespace App\Blocks;

use Illuminate\Support\Collection;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Contacts extends Block
{
  /**
   * The block slug.
   *
   * @var string
   */
  public $slug = 'contacts';

  /**
   * The block category.
   *
   * @var string
   */
  public $category = 'text';

  /**
   * The block icon.
   *
   * @var string|array
   */
  public $icon = 'editor-ul';

  /**
   * The block keywords.
   *
   * @var array
   */
  public $keywords = [];

  /**
   * The block post type allow list.
   *
   * @var array
   */
  public $post_types = [];

  /**
   * The parent block type allow list.
   *
   * @var array
   */
  public $parent = [];

  /**
   * The ancestor block type allow list.
   *
   * @var array
   */
  public $ancestor = [];

  /**
   * The default block mode.
   *
   * @var string
   */
  public $mode = 'edit';

  /**
   * The default block alignment.
   *
   * @var string
   */
  public $align = '';

  /**
   * The default block text alignment.
   *
   * @var string
   */
  public $align_text = '';

  /**
   * The default block content alignment.
   *
   * @var string
   */
  public $align_content = '';

  /**
   * The supported block features.
   *
   * @var array
   */
  public $supports = [
    'align' => true,
    'align_text' => false,
    'align_content' => false,
    'full_height' => false,
    'anchor' => false,
    'mode' => true,
    'multiple' => true,
    'jsx' => true,
  ];

  /**
   * The block preview example data.
   *
   * @var array
   */
  public $example = [
    'items' => [
      ['item' => 'Item one'],
      ['item' => 'Item two'],
      ['item' => 'Item three'],
    ],
  ];

  /**
   * The block template.
   *
   * @var array
   */
  public $template = [
    'core/heading' => ['placeholder' => 'Hello World'],
    'core/paragraph' => ['placeholder' => 'Welcome to the Contacts block.'],
  ];

  /**
   * The block name.
   */
  public function getName(): string
  {
    return __('Блок: Контакты', 'sage');
  }

  /**
   * The block description.
   */
  public function getDescription(): string
  {
    return __('A beautiful Contacts block.', 'sage');
  }

  /**
   * Data to be passed to the block before rendering.
   */
  public function with(): array
  {
    return [
      'block_title' => $this->block_title(),
      'title' => $this->title(),
      'list' => $this->list(),
      'map' => $this->map(),
      'show_map' => $this->show_map(),
    ];
  }

  /**
   * The block field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('contacts');

    $fields
      ->addText('block_title', [
        'label' => __('Заголовок блокa', 'sage'),
      ])
      ->addText('title', [
        'label' => __('Заголовок', 'sage'),
      ])

      ->addRepeater('list', [
        'label' => __('Список', 'sage'),
        'wrapper' => [
          'width' => 100,
        ],
      ])
      ->addText('item_title', [
        'label' => __('Заголовок', 'sage'),
        'wrapper' => [
          'width' => 30,
        ],
      ])
      ->addRepeater('list', [
        'label' => __('Список', 'sage'),
        'wrapper' => [
          'width' => 70,
        ],
      ])
      ->addTextarea('text', [
        'label' => __('Текст', 'sage'),
        'wrapper' => [
          'width' => 100,
        ],
        'rows' => 2,
        'new_lines' => 'br',
      ])

      ->endRepeater()

      ->endRepeater()
      ->addTextarea('map', [
        'label' => __('Карта Iframe, Виджет с картой', 'sage'),
        'wrapper' => [
          'width' => 80,
        ],
      ])
      ->addTrueFalse('show_map', [
        'label' => __('Показать карту', 'sage'),
        'wrapper' => [
          'width' => 20,
        ],
        'default_value' => 0,
      ]);

    return $fields->build();
  }

  public function map()
  {
    return get_field('map');
  }

  public function show_map()
  {
    return get_field('show_map');
  }

  public function block_title()
  {
    return get_field('block_title');
  }

  public function title()
  {
    return get_field('title');
  }

  /**
   * Retrieve the items.
   *
   * @return array
   */
  public function list()
  {
    return get_field('list');
  }

  /**
   * Assets enqueued when rendering the block.
   */
  public function assets(array $block): void
  {
    //
  }
}
