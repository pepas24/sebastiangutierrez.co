@extends('_layouts.master')

@section('body')
<section>
    <h1 class="page__title">Artículos</h1>

    <div class="post-list">
        @foreach ($posts as $post)
            <a class="post-link" href="{{ $post->getPath() }}" title="Ver artículo completo">
                <article class="post-container">
                    <h2 class="post__title">{{ $post->title }}</h2>
                    <div class="post__extra-info">
                        <div class="post__excerpt">
                            <p>{{ $post->excerpt }}</p>
                        </div>
                        <div class="post_date-tag">
                            <time class="post__date">25 Ago. 2018</time>
                            <div class="tag tag--vue">Vue</div>
                        </div>
                    </div>
                </article>
            </a>
        @endforeach
    </div>

</section>
@endsection
