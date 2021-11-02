@extends('_layouts.master')

@section('body')
<main class="post-content">
    <div>
        <div style="margin-bottom: 32px">
            <h1 class="page__title" style="margin-bottom: 0px">{{ $page->title }}</h1>
            <span class="post__date">{{ $page->date }}</span>
        </div>
        @yield('content')
    </div>
</main>
<nav>
    <ul class="inpost-pagination">
        <li class="prev">
            @if ($page->getPrevious())
                <a rel="prev" href="{{ $page->getPrevious()->getPath() }}">
                    <span>←</span> {{ $page->getPrevious()->title }}
                </a>
            @endif
        </li>
        <li class="next">
            @if ($page->getNext())
                <a rel="next" href="{{ $page->getNext()->getPath() }}">
                    {{ $page->getNext()->title }} <span>→</span>
                </a>
            @endif
        </li>
    </ul>
</nav>
@endsection
