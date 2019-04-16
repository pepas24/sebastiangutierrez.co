<div class="nav-header">
    <div class="nav-header__brand">
        Sebastián G.
    </div>
    <ul class="nav-header__menu">
        @foreach ( $page->navigation as $nav_item)
            <li class="nav-header__menu-item">
                <a href="{{ $nav_item->root }}">{{ $nav_item->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
