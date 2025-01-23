<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class About extends Block
{
    /**
     * The block slug.
     *
     * @var string
     */
    public $slug = 'about';

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
    ];

    /**
     * The block name.
     */
    public function getName(): string
    {
        return pll__('Блок: О компании', 'sage');
    }

    /**
     * The block description.
     */
    public function getDescription(): string
    {
        return pll__('A beautiful About block.', 'sage');
    }

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'block_title' => $this->block_title(),
            'title' => $this->title(),
            'text' => $this->text(),
            'list' => $this->list(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('about');

        $fields
            ->addText('block_title', [
                'label' => pll__('Блок: О компании'),
                'wrapper' => [
                    'width' => 100,
                ],
            ])
            ->addText('title', [
                'label' => pll__('Заголовок'),
                'wrapper' => [
                    'width' => 100,
                ],
            ])
            ->addWysiwyg('text', [
                'label' => pll__('Текст'),
                'wrapper' => [
                    'width' => 100,
                ],
            ])
            ->addRepeater('list', [
                'label' => pll__('Список'),
                'wrapper' => [
                    'width' => 100,
                ],
            ])
            ->addText('item_title', [
                'label' => pll__('Заголовок'),
                'wrapper' => [
                    'width' => 40,
                ],
            ])
            ->addImage('image', [
                'label' => pll__('Изображение'),
                'wrapper' => [
                    'width' => 20,
                ],
            ])
            ->addPostObject('post', [
                'label' => pll__('Выберите пост'),
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '40',
                ],
                'post_type' => ['icons-articles'],
                // 'taxonomy' => [],
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'object',
                'ui' => 1,
            ])
            ->endRepeater();

        // $fields->addRepeater('items')->addText('item')->endRepeater();

        return $fields->build();
    }

    public function title()
    {
        return get_field('title');
    }

    public function block_title()
    {
        return get_field('block_title');
    }

    public function text()
    {
        return get_field('text');
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
        if (is_admin()) {
            wp_enqueue_style(
                'about',
                \Roots\asset('resources/assets/styles/blocks/about.css'),
                [],
            );
        }
    }
}
