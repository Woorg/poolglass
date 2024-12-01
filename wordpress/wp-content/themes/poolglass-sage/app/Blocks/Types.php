<?php

namespace App\Blocks;

use WP_Query;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Types extends Block
{
  /**
   * The block slug.
   *
   * @var string
   */
  public $slug = 'types';

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
    'core/paragraph' => ['placeholder' => 'Welcome to the Types block.'],
  ];

  /**
   * The block name.
   */
  public function getName(): string
  {
    return __('Блок: Виды бассейнов', 'sage');
  }

  /**
   * The block description.
   */
  public function getDescription(): string
  {
    return __('A beautiful Types block.', 'sage');
  }

  /**
   * Data to be passed to the block before rendering.
   */
  public function with(): array
  {
    $args = [
      'post_type' => 'kinds',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'DESC',
    ];

    $query = new WP_Query($args);

    return [
      // 'items' => $this->items(),
      'kinds' => $query->posts,
    ];
  }

  /**
   * The block field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('types');
    $fields->addMessage('Виды бассейнов', 'Выводит из виды бассейнов');
    // $fields->addRepeater('items')->addText('item')->endRepeater();

    return $fields->build();
  }

  /**
   * Retrieve the items.
   *
   * @return array
   */
  // public function items()
  // {
  //   return get_field('items') ?: $this->example['items'];
  // }

  /**
   * Assets enqueued when rendering the block.
   */
  public function assets(array $block): void
  {
    //
  }
}