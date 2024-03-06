<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'featured_posts' => $this->featuredPosts(),
        ];
    }

    /**
     * Returns featured posts data.
     *
     * @return array
     */
    public function featuredPosts()
    {
        // Fetch the ID of the page set as the front page
        $front_page_id = get_option('page_on_front');

        // Use the ID to fetch the 'featured_posts' field from the front page
        $featured_posts = get_field('items', $front_page_id);

        return $featured_posts;
    }
}
