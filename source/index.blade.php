@extends('_layouts.master')

@section('body')
<section>
    <div class="page__intro">
        <h1>Sebastián Gutiérrez</h1>
        <p>Soy diseñador y desarrollador de interfaces. Actualmente trabajo como líder de desarrollo front end en Rocketfy.</p>
        <p>En el pasado trabajé en Sofka Technologies como diseñador de interfaces. Antes de eso estuve en Satrack una de las principales empresas de rastreo vehícular en Colombia como diseñador multimedia.</p>
        <img src="/assets/images/intro-pattern.png" alt="">
    </div>

    <h2 class="page__title">Últimos artículos</h2>

    <div class="post-list">
        @foreach ($posts as $post)
            <a class="post-link" href="{{ $post->getPath() }}" title="Ver artículo completo">
                <article class="post-container">
                    <h3 class="post__title link-text">{{ $post->title }}</h3>
                    <div class="post__extra-info">
                        <div class="post__excerpt">
                            <p>{{ $post->excerpt }}</p>
                        </div>
                        <div class="post_date">
                            <time class="post__date">{{ $post->date }}</time>
                        </div>
                    </div>
                </article>
            </a>
            @break($loop->iteration === 3)
        @endforeach
        <a href="/blog" class="show-all-link">Ver todos los artículos →</a>
    </div>

</section>
@endsection
