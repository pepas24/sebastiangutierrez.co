@extends('_layouts.master')

@section('body')
<section>
    <h1 class="page__title">Artículos</h1>

    <div class="post-list">
        @for ($i = 0; $i < 10; $i++)
            <a class="post-link" href="#" title="Ver artículo completo">
                <article class="post-container">
                    <h2 class="post__title">Configurar Sublime Text 3 para projectos Vue</h2>
                    <div class="post__extra-info">
                        <div class="post__excerpt">
                            <p>How to set up VS Code from zero to a perfect tool for JavaScript development</p>
                        </div>
                        <div class="post_date-tag">
                            <time class="post__date">25 Ago. 2018</time>
                            <div class="tag tag--vue">Vue</div>
                        </div>
                    </div>
                </article>
            </a>
        @endfor
    </div>

</section>
@endsection
