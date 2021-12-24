@extends('_layouts.master')

@section('body')
<main class="post-content">
    <div>
        <img src="/assets/images/{{ $page->cover }}" alt="">
        <div style="margin-bottom: 32px">
            <h1 class="page__title" style="margin-bottom: 0px">{{ $page->title }}</h1>
            <span class="post__date">{{ $page->date }}</span>
        </div>
        @yield('content')
    </div>
</main>
@endsection
