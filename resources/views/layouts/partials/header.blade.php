<header class="navagation">
    <figure class="logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/images/blogernpLogo.png') }}" alt="logo" />
        </a>
    </figure>

    <hr />

    <input type="checkbox" id="nav_check" hidden>
    <nav class="nav__list">
        <ul>
            {{-- <li><a href="#">News & Launches</a></li> --}}
            @foreach ($categories->take(6) as $category)
                <li>
                    <a href="{{ url('categories/' . $category->slug) }}">{{ $category->name }}</a>
                </li>
            @endforeach

            @if ($categories->count() > 6)
                <li>
                    <a href="#">More
                        <i class="fa-solid fa-chevron-down" style="color: #f9413f"></i>
                    </a>
                    <ul class="dropdown">
                        @foreach ($categories->skip(9) as $category)
                            <li>
                                <a href="{{ url('categories/' . $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </label>
    <hr />
</header>
