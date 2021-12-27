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
                @break($loop->iteration === 3)
            @endforeach
            <a href="/blog" class="show-all-link">Ver todos los artículos →</a>
        @else
            <div>No hay articulos para mostrar.</div>
        @endif
    </div>

    <h2 class="page__title">Proyectos destacados</h2>

    <div class="post-list">
        @if (count($projects) > 0)
            @foreach ($projects as $project)
                <a class="post-link" href="{{ $project->getPath() }}" title="Ver artículo completo">
                    <article class="post-container project-container">
                        <img src="/assets/images/{{ $project->image }}" alt="">
                        <div>
                            <h3 class="post__title link-text">{{ $project->title }}</h3>
                            <div class="post__extra-info">
                                <div class="post__excerpt">
                                    <p>{{ $project->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
            @endforeach
        @else
            <div>No hay proyectos para mostrar.</div>
        @endif
    </div>

</section>
@endsection
