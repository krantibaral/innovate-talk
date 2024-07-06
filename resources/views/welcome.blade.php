@extends('layouts.app')
@section('content')
<section class="blog__preview">
    <figure class="preview__image">
        <img src="Images/previewImage.jpg" alt="Laptop and books" />
    </figure>

    <div class="preview__details">
        <p class="category">Technology</p>
        <p class="upload__date">
            <i class="fa-regular fa-calendar-days"></i>
            May 5th 2004
        </p>
        <a href="blog_details.html">
            <h2 class="preview__title">
                Spot Misinformation online with these tips
            </h2>
        </a>
        <p class="preview__description">
            How effectively the massive shopping center can repurpose more than
            300,000 square feet soon to be vacated.
        </p>
        <div class="user__profile">
            <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
            <p>By <span class="user__name"> Joshep Mathew </span></p>
        </div>
    </div>
</section>
<!-- End of preview section -->

<main class="container">
    <section class="wrapper">
        <!-- Start of article section -->
        <section class="news__container">
            <h3 class="news__headline">Latest News</h3>

            <!-- Starting of news card -->
            @foreach ($blogs as $blog)
                <article class="news__card">
                    <figure class="news__image">
                        <a href="{{ route('blog_details', $blog->id) }}">
                            <img src="{{ $blog->getImage() }}" alt="{{ $blog->title }}" />
                        </a>
                    </figure>
                    <hr />
                    <div class="news__card__body">
                        <p class="category">{{ $blog->category->name }}</p>
                        <p class="news__title">{{ $blog->title }}</p>
                        <div class="user__profile" style="display: flex; align-items: center; color:rgb(201, 201, 201);">
                            @if ($blog->author_image)
                                <img src="{{ asset('storage/' . $blog->author_image) }}" alt="User name {{ $blog->author }}"
                                    style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" />
                            @else
                                <i class="fa fa-user-circle" style="font-size: 40px;"></i>
                            @endif
                            <p style="margin-left: 10px; color:black;">By <span
                                    class="user__name">{{ $blog->author }}</span></p>
                        </div>
                        <p class="upload__date">
                            <i class="fa-regular fa-calendar-days"></i>
                            {{ $blog->created_at->format('F j, Y') }}
                        </p>
                    </div>
                </article>
            @endforeach

            <!-- End of news card -->

            <!-- Start of aside section -->
            <section class="category__container">
                <h3 class="category__headline">Favorites Categories</h3>
                <ul>
                    <li class="category__list">News and Launches</li>
                    <li class="category__list">Reviews</li>
                    <li class="category__list">Advice</li>
                    <li class="category__list">Tech and Threads</li>
                    <li class="category__list">Gaming</li>
                    <li class="category__list">Communities</li>
                    <li class="category__list">Mobileapp</li>
                    <li class="category__list">User ueries</li>
                    <li class="category__list">It solutions</li>
                    <li class="category__list">Startup</li>
                </ul>
                <div class="category__advertisement__section">
                    <img src="Images/AdvertisementBanner.jpg" alt="Advertisement of certain product." />
                </div>
            </section>
        </section>
        <!-- End of aside section -->
    </section>
</main>


<!-- Starting of slider section -->
<section class="swiper mySwiper slider__container">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <section class="swiper-slide news__slider">
            @foreach ($blogs as $blog)
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
                    <a href="blog_details.html">
                        <h2 class="news__slider__title">
                            {{ $blog->title }}
                        </h2>
                    </a>
                    <p class="news__slider__description"
                        style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 2; text-overflow: ellipsis; white-space: normal;">
                        {{ strip_tags($blog->description) }}!
                    </p>


                    <div class="user__profile">
                        <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                        <p>By <span class="user__name"> Joshep Mathew </span></p>
                    </div>
                </div>
            @endforeach
        </section>
        <!-- End of slide 1 -->


    </div>
</section>
<!-- End of slider section -->

<!-- Start of Recently viewed section -->
<main class="chamber">
    <section class="wrapper">
        <h3 class="card__headline">Recently Viewed</h3>
        <section class="card__container">

            <!-- Recently card 1 -->
            <article class="card">
                <figure class="card__image">
                    <a href="blog_details_premium.html">
                        <img src="Images/Article_image1.jpg" alt="Office environment" />
                    </a>
                </figure>

                <div class="card__body">
                    <p class="category">Technology</p>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>

                    <p class="card__title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, quia.
                    </p>
                </div>
            </article>
            <!-- End of news card -->

            <article class="card">
                <figure class="card__image">
                    <a href="blog_details_premium.html">
                        <img src="Images/Article_image2.jpg" alt="Office environment" />
                    </a>
                </figure>

                <div class="card__body">
                    <p class="category">Technology</p>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>
                    <p class="card__title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, quia.
                    </p>


                </div>
            </article>

            <article class="card">
                <figure class="card__image">
                    <a href="blog_details_premium.html">
                        <img src="Images/Article_image3.jpg" alt="Office environment" />
                    </a>
                </figure>
                <div class="card__body">
                    <p class="category">Technology</p>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>
                    <p class="card__title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, quia.
                    </p>


                </div>
            </article>

            <article class="card">
                <figure class="card__image">
                    <a href="blog_details_premium.html">
                        <img src="Images/Article_image4.jpg" alt="Office environment" />
                    </a>
                </figure>

                <div class="card__body">
                    <p class="category">Technology</p>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>
                    <p class="card__title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, quia.
                    </p>


                </div>
            </article>
        </section>
</main>
<!-- End of recently view section -->

<!-- Mail section -->
<section class="mail__for__news">
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

<!-- Advertisememnt Section -->
<section class="advertisement__section1">
    <img src="Images/AdvertisementBanner.jpg" alt="Advertisement Banner">
</section>

<section class="advertisement__section2">
    <img src="Images/AdvertisementBanner.jpg" alt="Advertisement Banner">
</section>
@endsection