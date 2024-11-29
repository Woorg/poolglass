<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class KindExtra extends Field
{
  /**
   * The field group.
   */
  public function fields(): array
  {
    $fields = Builder::make('kind_extra');

    $fields->setLocation('post_type', '==', 'kinds');

    $fields
      ->addImage('kind_image', [
        'label' => 'Изображение карточки',
        'wrapper' => ['width' => 30],
        'return_format' => 'id',
        'library' => 'all',
      ])
      ->addTextarea('kind_excerpt', [
        'label' => 'Описание карточки',
        'wrapper' => ['width' => 70],
        'rows' => '6',
        'new_lines' => 'br',
      ]);

    return $fields->build();
  }

  // public function with(): array
  // {
  //   return [
  //     'kind_image' => $this->image(),
  //     'kind_excerpt' => $this->excerpt(),
  //   ];
  // }

  // public function image()
  // {
  //   return get_field('kind_image');
  // }

  // public function excerpt()
  // {
  //   return get_field('kind_excerpt');
  // }
}
