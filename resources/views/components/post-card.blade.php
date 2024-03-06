@php
// Extract necessary data from the post object
$title = $post->post_title;
$teaser = wp_trim_words($post->post_content, 18, '...');
$imageUrl = get_the_post_thumbnail_url($post->ID, 'full');
$postUrl = get_permalink($post->ID);
$date = \Carbon\Carbon::parse($post->post_date)->diffForHumans();
@endphp

<div class="splide__slide bg-white rounded-lg overflow-hidden">
    <img src="{{ $imageUrl }}" alt="{{ $title }}" class="w-full object-cover h-48">
    <div class="p-4">
        <h2 class="post-card__title font-bold text-xl mb-2">{{ $title }}</h2>
        <p class="post-card__teaser text-gray-700 text-base mb-4">{{ $teaser }}</p>
        <a href="{{ $postUrl }}" class="post-card__link inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">See more</a>
        <p class="post-card__date text-gray-600 text-sm mt-2">{{ $date }}</p>
    </div>
</div>

