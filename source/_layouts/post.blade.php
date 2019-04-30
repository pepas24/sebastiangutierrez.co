@extends('_layouts.master')

@section('body')
<main class="post-content">
    <div>
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
