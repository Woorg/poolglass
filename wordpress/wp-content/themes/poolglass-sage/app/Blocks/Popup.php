<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Popup extends Block
{
    /**
     * The block slug.
     *
     * @var string
     */
    public $slug = 'popup';

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
    public $mode = 'preview';

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
        // 'core/heading' => ['placeholder' => 'Hello World'],
        // 'core/paragraph' => ['placeholder' => 'Welcome to the Popup block.'],
    ];

    /**
     * The block name.
     */
    public function getName(): string
    {
        return pll__('Блок: попап', 'sage');
    }

    /**
     * The block description.
     */
    public function getDescription(): string
    {
        return pll__('A beautiful Popup block.', 'sage');
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'title' => $this->title(),
            'popup_style' => $this->popup_style(),
            'popup_id' => $this->popup_id(),
            'popup_shortcode' => $this->popup_shortcode(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('popup');

        $fields
            ->addTextarea('title', [
                'label' => pll__('Заголовок'),
                'wrapper' => [
                    'width' => '50',
                ],
                'rows' => 2,
                'new_lines' => 'br',
            ])
            ->addSelect('popup_style', [
                'label' => 'Выберите стиль попапа',
                'required' => 0,
                'wrapper' => [
                    'width' => '20',
                ],
                'choices' => [
                    'single' => 'single',
                    'multiple' => 'multiple',
                ],
                'default_value' => [
                    0 => 'single',
                ],
                'allow_null' => 0,
                'ui' => 0,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => 'Выберите стиль кнопки',
            ])
            ->addText('popup_id', [
                'label' => pll__('ID попапа'),
                'wrapper' => [
                    'width' => '30',
                ],
            ])
            ->addText('popup_shortcode', [
                'label' => pll__('Форма из Contact Form 7'),
                'wrapper' => [
                    'width' => '100',
                ],
            ]);

        return $fields->build();
    }

    public function popup_style()
    {
        return get_field('popup_style');
    }

    public function popup_shortcode()
    {
        return get_field('popup_shortcode');
    }

    public function popup_id()
    {
        return get_field('popup_id');
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function title()
    {
        return get_field('title');
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
        if (is_admin()) {
            wp_enqueue_style(
                'popup',
                \Roots\asset('resources/assets/styles/blocks/popup.css'),
                [],
            );
        }
    }
}
