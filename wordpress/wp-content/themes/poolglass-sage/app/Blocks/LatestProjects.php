<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class LatestProjects extends Block
{
  /**
   * The block slug.
   *
   * @var string
   */
  public $slug = 'latestprojects';

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
    'color' => [
      'background' => false,
      'text' => false,
      'gradient' => false,
    ],
  ];

  /**
   * The block styles.
   *
   * @var array
   */
  public $styles = ['light', 'dark'];

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
    'core/paragraph' => [
      'placeholder' => 'Welcome to the Latest Projects block.',
    ],
  ];

  /**
   * The block name.
   */
  public function getName(): string
  {
    return __('Блок: Последние проекты', 'sage');
  }

  /**
   * The block description.
   */
  public function getDescription(): string
  {
    return __('A beautiful Latest Projects block.', 'sage');
  }

  /**
   * Data to be passed to the block before rendering.
   */
  public function with(): array
  {
    return [
      'title' => $this->title(),
      'list' => $this->list(),
      'more' => $this->more(),
    ];
  }

  /**
   * The block field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('latest_projects');

    $fields
      ->addText('title', [
        'label' => __('Заголовок'),
        'wrapper' => [
          'width' => 100,
        ],
      ])

      ->addRepeater('list', [
        'label' => __('Список'),
        'wrapper' => [
          'width' => 100,
        ],
        'layout' => 'block',
        'button_label' => 'Добавить элемент',
        'max' => 3,
      ])
      ->addText('item_title', [
        'label' => __('Заголовок'),
        'wrapper' => [
          'width' => 100,
        ],
      ])
      ->addWysiwyg('text', [
        'label' => __('Текст'),
        'wrapper' => [
          'width' => 60,
        ],
      ])
      ->addPostObject('post', [
        'label' => __('Пост'),
        'wrapper' => [
          'width' => 40,
        ],
        'post_type' => ['kinds'],
      ])
      ->addText('more_text', [
        'label' => __('Текст подробнее'),
        'wrapper' => [
          'width' => 100,
        ],
        'default_value' => 'Читать подробнее',
      ])
      ->endRepeater()

      ->addGroup('more', [
        'label' => __('Ссылка на все проекты'),
        'wrapper' => [
          'width' => 100,
        ],
        'layout' => 'block',
      ])
      ->addPageLink('link', [
        'label' => __('Ссылка на страницу'),
        'wrapper' => [
          'width' => 60,
        ],
        'post_type' => [],
      ])
      ->addImage('image', [
        'label' => __('Изображение'),
        'wrapper' => [
          'width' => 40,
        ],
      ])
      ->endGroup();

    return $fields->build();
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

  public function more()
  {
    return get_field('more');
  }

  /**
   * Assets enqueued when rendering the block.
   */
  public function assets(array $block): void
  {
    //
  }
}
