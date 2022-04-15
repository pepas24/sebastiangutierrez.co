@extends('_layouts.master')

@section('body')
<section>
    <h2 class="page__title">Artículos</h2>

    <div class="post-list">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <a class="post-link" href="{{ $post->getPath() }}" title="Ver artículo completo">
                    <article class="post-container">
                        <h3 class="post__title link-text">{{ $post->title }}</h3>
                        <div class="post__extra-info">
                            <div class="post__excerpt">
                                <p>{{ $post->excerpt }}</p>
                            </div>
                            <div class="post_date">
                                <time class="post__date">{{ $post->getDate() }}</time>
                            </div>
                        </div>
                    </article>
                </a>
            @endforeach
        @else
            <div>No hay artículos para mostrar.</div>
        @endif
    </div>
</section>
@endsection
