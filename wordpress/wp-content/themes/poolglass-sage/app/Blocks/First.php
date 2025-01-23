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
        return pll__('Блок: Первый', 'sage');
    }

    /**
     * The block description.
     */
    public function getDescription(): string
    {
        return pll__('A beautiful First block.', 'sage');
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
            'tiles' => $this->tiles(),
            'tiles_show' => $this->tiles_show(),
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
                'label' => pll__('Заголовок h1', 'sage'),
                // 'wrapper' => [
                //     'width' => '50',
                // ],
                'default_value' => 'Стеклянный бассейн',
                'new_lines' => 'br',
                'rows' => 2,
            ])
            ->addTrueFalse('parallax', [
                'label' => pll__('Параллакс', 'sage'),
                // 'wrapper' => [
                //     'width' => '10',
                // ],
            ])
            ->addImage('parallax_image', [
                'label' => pll__('Изображение', 'sage'),
                // 'wrapper' => [
                //     'width' => '40',
                // ],
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
                'label' => pll__('Кнопки', 'sage'),
                // 'wrapper' => [
                //     'width' => '90',
                // ],
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
                'label' => pll__('URL', 'sage'),
                // 'wrapper' => [
                //     'width' => '40',
                // ],
            ])
            ->addText('name', [
                'label' => pll__('Текст кнопки', 'sage'),
                // 'wrapper' => [
                //     'width' => '40',
                // ],
            ])
            ->addSelect('button_style', [
                'label' => 'Выберите стиль кнопки',
                'required' => 0,
                // 'wrapper' => [
                //     'width' => '20',
                // ],
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
                'label' => pll__('Показать кнопки', 'sage'),
                // 'wrapper' => [
                //     'width' => '10',
                // ],
            ])
            ->addRepeater('list', [
                'label' => pll__('Список', 'sage'),
                // 'wrapper' => [
                //     'width' => '90',
                // ],
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
                'label' => pll__('Пункт списка', 'sage'),
                // 'wrapper' => [
                //     'width' => '100',
                // ],
            ])
            ->endRepeater()
            ->addTrueFalse('list_show', [
                'label' => pll__('Показать список', 'sage'),
                // 'wrapper' => [
                //     'width' => '10',
                // ],
            ])
            ->addRepeater('tiles', [
                'label' => pll__('Плитки', 'sage'),
                // 'wrapper' => [
                //     'width' => '90',
                // ],
                'layout' => 'block',
                'conditional_logic' => [
                    [
                        [
                            'field' => 'tiles_show',
                            'operator' => '==',
                            'value' => '1',
                        ],
                    ],
                ],
            ])
            ->addSelect('tile_style', [
                'label' => 'Выберите стиль плитки',
                'required' => 0,
                // 'wrapper' => [
                //     'width' => '15',
                // ],
                'choices' => [
                    'sale' => 'Sale',
                    'calc' => 'Calculator',
                    'price' => 'Price',
                    'install' => 'Install',
                    'callback' => 'Callback',
                    'tech' => 'Tech',
                ],
                'default_value' => [
                    'sale' => 'Sale',
                ],
                'allow_null' => 0,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => 'Выберите стиль плитки',
            ])
            ->addText('tile_text', [
                'label' => pll__('Текст плитки', 'sage'),
                // 'wrapper' => [
                //     'width' => '35',
                // ],
            ])
            ->addLink('tile_link', [
                'label' => pll__('Cсылка', 'sage'),
                // 'type' => 'page_link',
                'instructions' => '',
                // 'required' => 0,
                // 'wrapper' => [
                //     'width' => '20',
                // ],
                // 'post_type' => [],
                // 'taxonomy' => [],
                // 'allow_null' => 0,
                // 'allow_archives' => 1,
                // 'multiple' => 0,
                'return_format' => 'array',
                'conditional_logic' => [],
            ])
            ->addText('tile_popup_id', [
                'label' => pll__('Id попапа', 'sage'),
                // 'wrapper' => [
                //     'width' => '20',
                // ],
                'conditional_logic' => [
                    [
                        [
                            'field' => 'tile_link',
                            'operator' => '==empty',
                        ],
                    ],
                ],
            ])
            ->addTrueFalse('tile_show', [
                'label' => pll__('Показать плитку', 'sage'),
                // 'wrapper' => [
                //     'width' => '10',
                // ],
            ])
            ->endRepeater()
            ->addTrueFalse('tiles_show', [
                'label' => pll__('Показать список плиток', 'sage'),
                // 'wrapper' => [
                //     'width' => '10',
                // ],
            ]);

        return $fields->build();
    }

    public function tiles_show()
    {
        return get_field('tiles_show');
    }

    public function tiles()
    {
        return get_field('tiles');
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

        if (is_admin()) {
            wp_enqueue_style(
                'first',
                \Roots\asset('resources/assets/styles/blocks/first.css'),
                [],
            );
        }
    }
}
