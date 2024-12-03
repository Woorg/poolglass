<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class First extends Block
{
  /**
   * The block slug.
   *
   * @var string
   */
  public $slug = 'first';

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
    'core/paragraph' => ['placeholder' => 'Welcome to the First block.'],
  ];

  /**
   * The block name.
   */
  public function getName(): string
  {
    return __('Блок: Заказать', 'sage');
  }

  /**
   * The block description.
   */
  public function getDescription(): string
  {
    return __('A beautiful First block.', 'sage');
  }

  /**
   * Data to be passed to the block before rendering.
   */
  public function with(): array
  {
    return [
      'title' => $this->title(),
      'parallax' => $this->parallax(),
      'parallax_image' => $this->parallax_image(),
      'buttons_show' => $this->buttons_show(),
      'list_show' => $this->list_show(),
      'buttons' => $this->buttons(),
      'list' => $this->list(),
    ];
  }

  /**
   * The block field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('first');

    $fields
      ->addTextarea('title', [
        'label' => __('Заголовок h1', 'sage'),
        'wrapper' => [
          'width' => '50',
        ],
        'default_value' => 'Стеклянный бассейн',
        'new_lines' => 'br',
        'rows' => 2,
      ])
      ->addTrueFalse('parallax', [
        'label' => __('Параллакс', 'sage'),
        'wrapper' => [
          'width' => '10',
        ],
      ])
      ->addImage('parallax_image', [
        'label' => __('Изображение', 'sage'),
        'wrapper' => [
          'width' => '40',
        ],
        'return_format' => 'id',
        'conditional_logic' => [
          [
            [
              'field' => 'parallax',
              'operator' => '==',
              'value' => '1',
            ],
          ],
        ],
      ])
      ->addRepeater('buttons', [
        'label' => __('Кнопки', 'sage'),
        'wrapper' => [
          'width' => '90',
        ],
        'layout' => 'block',
        'conditional_logic' => [
          [
            [
              'field' => 'buttons_show',
              'operator' => '==',
              'value' => '1',
            ],
          ],
        ],
      ])
      ->addText('url', [
        'label' => __('URL', 'sage'),
        'wrapper' => [
          'width' => '40',
        ],
      ])
      ->addText('name', [
        'label' => __('Текст кнопки', 'sage'),
        'wrapper' => [
          'width' => '40',
        ],
      ])
      ->addSelect('button_style', [
        'label' => 'Выберите стиль кнопки',
        'required' => 0,
        'wrapper' => [
          'width' => '20',
        ],
        'choices' => [
          'solid' => 'solid',
          'ghost' => 'ghost',
        ],
        'default_value' => [
          1 => 'ghost',
        ],
        'allow_null' => 0,
        'ui' => 0,
        'ajax' => 0,
        'return_format' => 'value',
        'placeholder' => 'Выберите стиль кнопки',
      ])
      ->endRepeater()

      ->addTrueFalse('buttons_show', [
        'label' => __('Показать кнопки', 'sage'),
        'wrapper' => [
          'width' => '10',
        ],
      ])
      ->addRepeater('list', [
        'label' => __('Список', 'sage'),
        'wrapper' => [
          'width' => '90',
        ],
        'layout' => 'block',
        'conditional_logic' => [
          [
            [
              'field' => 'list_show',
              'operator' => '==',
              'value' => '1',
            ],
          ],
        ],
      ])
      ->addText('item', [
        'label' => __('Пункт списка', 'sage'),
        'wrapper' => [
          'width' => '100',
        ],
      ])
      ->endRepeater()
      ->addTrueFalse('list_show', [
        'label' => __('Показать список', 'sage'),
        'wrapper' => [
          'width' => '10',
        ],
      ]);

    return $fields->build();
  }

  public function parallax()
  {
    return get_field('parallax');
  }

  public function parallax_image()
  {
    return get_field('parallax_image');
  }

  public function buttons_show()
  {
    return get_field('buttons_show');
  }

  public function list_show()
  {
    return get_field('list_show');
  }

  public function title()
  {
    return get_field('title');
  }

  public function buttons()
  {
    return get_field('buttons');
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
