@extends('layouts.app')

@section('content')
<section class="blog__preview">
    <figure class="preview__image">
        @if ($latestBlog->getImage())
            <img src="{{ $latestBlog->getImage() }}" alt="{{ $latestBlog->title }}" loading="lazy" />
        @else
            <img src="{{ asset('assets/images/AdvertisementBanner.jpg') }}" alt="{{ $latestBlog->title }}" loading="lazy" />
        @endif
    </figure>
    <div class="preview__details">
        <p class="category">{{ $latestBlog->category->name }}</p>
        <p class="upload__date">
            <i class="fa-regular fa-calendar-days"></i>
            {{ $latestBlog->created_at->format('F jS, Y') }}
        </p>
        <a href="{{ route('blog_details', $latestBlog->slug) }}">
            <h2 class="preview__title">
                {{ $latestBlog->title }}
            </h2>
        </a>
        <p class="preview__description">
            {!! Str::limit(strip_tags($latestBlog->description), 150) !!}
        </p>
        <div class="user__profile">
            <img src="{{ $latestBlog->user->profile_image ? asset('storage/' . $latestBlog->user->profile_image) : asset('assets/images/User-1.jpg') }}"
                alt="User name {{ $latestBlog->user->name }}" />
            <p>By <span class="user__name">{{ $latestBlog->user->name }}</span></p>
        </div>
    </div>
</section>

<!-- End of preview section -->

<main class="container">
    <section class="wrapper">
        <!-- Start of article section -->
        <section class="news__container">
            <h3 class="news__headline hidden">Latest News</h3>

            @foreach ($blogs as $blog)
                <!-- Starting of news card -->
                <article class="news__card hidden">
                    <figure class="news__image">
                        <a href="{{ route('blog_details', $blog->slug) }}">
                            <img src="{{ $blog->getImage() }}" alt="{{ $blog->title }}" loading="lazy" />
                        </a>
                    </figure>
                    <hr />
                    <div class="news__card__body">
                        <p class="category">{{ $blog->category->name }}</p>
                        <p class="news__title">
                            {{ Str::limit($blog->title, 100, '...') }}
                        </p>
                        <div class="user__profile" style="display: flex; align-items: center; color:rgb(201, 201, 201);">
                            @if ($blog->author_image)
                                <img src="{{ asset('storage/' . $blog->author_image) }}" alt="User name {{ $blog->user->name }}"
                                    style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" />
                            @else
                                <i class="fa fa-user-circle" style="font-size: 40px;"></i>
                            @endif
                            <p style="margin-left: 10px; color:black;">By <span
                                    class="user__name">{{ $blog->user->name }}</span></p>
                        </div>
                        <p class="upload__date">
                            <i class="fa-regular fa-calendar-days"></i>
                            {{ $blog->created_at->format('F j, Y') }}
                        </p>
                    </div>
                </article>
                <!-- End of news card -->
            @endforeach
        </section>
        <!-- End of article section -->

        <!-- Start of aside section -->
        <section class="category__container hidden">
            <h3 class="category__headline hidden">Favorites Categories</h3>
            <ul>
                @foreach ($categories as $category)
                    <a href="{{ route('category.details', $category->slug) }}">
                        <li class="category__list hidden">{{ $category->name }}</li>
                    </a>
                @endforeach
            </ul>
            <div class="category__advertisement__section hidden">
                @foreach ($advertisements as $advertisement)
                    <img src="{{ $advertisement->getImage() }}" alt="{{ $advertisement->title }}" />
                @endforeach
            </div>
        </section>
        <!-- End of aside section -->
    </section>
</main>

<!-- Starting of slider section -->
<section class="swiper mySwiper slider__container hidden">
    <div class="swiper-wrapper">
        @foreach ($blogs as $blog)
            <!-- Slide -->
            <section class="swiper-slide news__slider">
                <figure class="news__slider__image">
                    <img src="{{ $blog->getImage() }}" alt="{{ $blog->title }}" />
                    <div class="arrow__buttons">
                        <i class="swiper-button-next"></i>
                        <i class="swiper-button-prev"></i>
                    </div>
                </figure>
                <div class="news__slider__details">
                    <p class="category">{{ $blog->category->name }}</p>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        {{ $blog->created_at->format('F j, Y') }}
                    </p>
                    <a href="{{ route('blog_details', $blog->slug) }}">
                        <h2 class="news__slider__title">
                            {{ $blog->title }}
                        </h2>
                    </a>
                    <p class="news__slider__description"
                        style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2; text-overflow: ellipsis; white-space: normal;">
                        {{ strip_tags($blog->description) }}!
                    </p>
                    <div class="user__profile" style="display: flex; align-items: center; color:rgb(201, 201, 201);">
                        @if ($blog->author_image)
                            <img src="{{ asset('storage/' . $blog->author_image) }}" alt="User name {{ $blog->user->name }}"
                                style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" />
                        @else
                            <i class="fa fa-user-circle" style="font-size: 40px;"></i>
                        @endif
                        <p style="margin-left: 10px; color:black;">By <span
                                class="user__name">{{ $blog->user->name }}</span></p>
                    </div>
                </div>
            </section>
            <!-- End of slide -->
        @endforeach
    </div>
</section>
<!-- End of slider section -->

<!-- Start of Recently viewed section -->
<main class="chamber hidden">
    <section class="wrapper">
        <h3 class="card__headline hidden">Recently Viewed</h3>
        <section class="card__container">
            @foreach ($recentlyViewedBlogs as $blog)
                <article class="card hidden">
                    <figure class="card__image">
                        <a href="{{ route('blog_details', $blog->slug) }}">
                            <img src="{{ $blog->getImage() }}" alt="{{ $blog->title }}" />
                        </a>
                    </figure>
                    <div class="card__body">
                        <p class="category">{{ $blog->category->name }}</p>
                        <p class="upload__date">
                            <i class="fa-regular fa-calendar-days"></i>
                            {{ $blog->created_at->format('F j, Y') }}
                        </p>
                        <p class="card__title">{{ $blog->title }}</p>
                    </div>
                </article>
            @endforeach
        </section>
    </section>
</main>
<!-- End of recently viewed section -->

<!-- Mail section -->
<section class="mail__for__news hidden">
    <i class="fa-solid fa-envelope-open-text"></i>
    <div class="mail__text">
        <p>Get Every News Letter</p>
        <p>Dont worry we are not gonna make spamming</p>
    </div>
    <form action="">
        <input id="email__field" type="text" placeholder="Enter your email" onkeyup="validateEmail()">
        <span id="email__error">Error Msg</span>
    </form>
</section>
<!-- Mail section Ends -->

<!-- Advertisement Section -->
@foreach ($advertisements as $advertisement)
    <section class="advertisement__section1 hidden">
        <img src="{{ $advertisement->getImage() }}" alt="{{ $advertisement->title }}" />
    </section>
@endforeach
<!-- Advertisement Section Ends -->
@endsection