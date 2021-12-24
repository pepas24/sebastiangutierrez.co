<div class="nav-header">
    <ul class="nav-header__menu">
        @foreach ( $page->navigation as $nav_item)
            <li class="nav-header__menu-item">
                <a href="{{ $nav_item->root }}" {{ $nav_item->external ? 'target="_blank" rel="noopener noreferrer"' : '' }}>
                    {{ $nav_item->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
