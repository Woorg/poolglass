<?php

namespace App\Blocks;

use WP_Query;
use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;
use Log1x\Pagi\Pagi;

class Articles extends Block
{
  /**
   * The block slug.
   *
   * @var string
   */
  public $slug = 'articles';

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
   * The block template.
   *
   * @var array
   */
  public $template = [
    'core/heading' => ['placeholder' => 'Hello World'],
    // 'core/paragraph' => ['placeholder' => 'Welcome to the Articles block.'],
  ];

  /**
   * The block name.
   */
  public function getName(): string
  {
    return pll__('Блок: Статьи', 'sage');
  }

  /**
   * The block description.
   */
  public function getDescription(): string
  {
    return pll__('A beautiful Articles block.', 'sage');
  }

  /**
   * Data to be passed to the block before rendering.
   */
  public function with(): array
  {
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

    $args = [
      'post_type' => 'icons-articles',
      'posts_per_page' => 9,
      'paged' => $paged,
      'orderby' => 'title',
      'order' => 'DESC',
    ];

    $query = new WP_Query($args);

    $pagination = new Pagi();
    $pagination->setQuery($query);
    $pagination->build();

    return [
      'articles' => $query->posts,
      'pagination' => $pagination->build(),
    ];
  }

  /**
   * The block field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('articles');

    $fields->addMessage(
      'Статьи',
      'выводит из статей',

      // ->addRepeater('items')
      // ->addText('item')
      // ->endRepeater()
    );

    return $fields->build();
  }

  /**
   * Assets enqueued when rendering the block.
   */
  public function assets(array $block): void
  {
    //
  }
}
