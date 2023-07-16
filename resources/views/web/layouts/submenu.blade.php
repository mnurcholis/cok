@foreach ($childs as $child)
    <li class="{{ count($child->childs) ? 'dropdown dropdown-submenu dropend' : 'nav-item' }}">
        <a class="{{ count($child->childs) ? 'dropdown-item dropdown-toggle' : 'dropdown-item' }}"
            {{ count($child->childs) ? 'data-bs-toggle="dropdown"' : '' }}
            @if (substr($child->slug, 0, 4) == 'http') href="{{ $child->slug }}"
            @else href="{{ url('/' . $child->slug) }}" @endif>{{ $child->title }}</a>
        @if (count($child->childs))
            <ul class="dropdown-menu">
                @include('web.layouts.submenu', ['childs' => $child->childs])
            </ul>
        @endif
    </li>
@endforeach
