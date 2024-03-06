<?php
/**
 * This file is used to register the ACF fields for the front page.
 * 
 * @package App\Fields
 */

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class FeaturedPosts extends Field
{
    /**
     * Defines the field group.
     *
     * @return array
     */
    public function fields(): array
    {
        $featuredPosts = Builder::make('featured_posts')
            ->setLocation('page_type', '==', 'front_page')
            ->addRepeater(
                'items', [
                'label' => 'Featured Items',
                'instructions' => 'Add posts to feature.',
                'button_label' => 'Add Post',
                ]
            )
            ->addPostObject(
                'post', [
                'label' => 'Select a Post',
                'instructions' => 'Choose a post to feature.',
                'post_type' => [
                    'post',
                ],
                'return_format' => 'object',
                'multiple' => 0,
                ]
            )
            ->endRepeater();

        return $featuredPosts->build();
    }
}
