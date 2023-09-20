@extends('Layout.layout')


<title>View</title>

@section('content')

<section class="section section-lg text-center bg-gray-lighter novi-background bg-cover">
    <div class="container container-bigger">
        <h3>All Blogs</h3>
        <div class="divider divider-decorate"></div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-layout-1" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
            @foreach($blogs as $blog)
            <article class="quote-boxed">
                <div class="quote-boxed-aside">
                    <img class="quote-boxed-image" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}" width="210" height="210"/>
                </div>
                
                <div class="quote-boxed-main">
                    <div class="quote-boxed-text">
                        <p>{{ $blog->blog }}</p>
                    </div>
                    <div class="quote-boxed-meta">
                        <p class="quote-boxed-cite">{{ $blog->name }}</p>
                        <p class="quote-boxed-small">{{ $blog->designation }}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
