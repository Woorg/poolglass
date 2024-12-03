<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Back extends Block
{
  /**
   * The block slug.
   *
   * @var string
   */
  public $slug = 'back';

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
    'core/paragraph' => ['placeholder' => 'Welcome to the Back block.'],
  ];

  /**
   * The block name.
   */
  public function getName(): string
  {
    return __('Блок: кнопка назад ', 'sage');
  }

  /**
   * The block description.
   */
  public function getDescription(): string
  {
    return __('A beautiful Back block.', 'sage');
  }

  /**
   * Data to be passed to the block before rendering.
   */
  public function with(): array
  {
    return [
      'back' => $this->back(),
    ];
  }

  /**
   * The block field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('back');

    $fields->addMessage('back_button', 'Кнопка назад', [
      'label' => __('Кнопка назад', 'sage'),
    ]);

    return $fields->build();
  }

  /*************  ✨ Codeium Command ⭐  *************/
  /**
   * Retrieve the value of the "back_button" field.
   *
   * @return string
   */
  /******  a2d01383-6adf-4141-8542-9f1ffa354846  *******/
  public function back()
  {
    return get_field('back_button');
  }

  /**
   * Assets enqueued when rendering the block.
   */
  public function assets(array $block): void
  {
    //
  }
}
