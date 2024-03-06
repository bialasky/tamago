@extends('layouts.app')

@section('content')
    <section class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($featured_posts as $item)
                    @php
                        $post = $item['post'];
                    @endphp

                    @include('components.post-card', ['post' => $post])
                @endforeach
            </ul>
        </div>
    </section>
@endsection