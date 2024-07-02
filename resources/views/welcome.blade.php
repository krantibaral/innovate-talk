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
            <article class="news__card">
                <figure class="news__image">
                    <a href="blog_details.html">
                        <img src="Images/Article_image1.jpg" alt="Office environment" />
                    </a>
                </figure>
                <hr />

                <div class="news__card__body">
                    <p class="category">Technology</p>
                    <p class="news__title">
                        Latest News Technology How you'll find accurate and timely
                        information on COVID-19 vaccines How you'll find accurate and
                        timely ?
                    </p>
                    <div class="user__profile">
                        <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                        <p>By <span class="user__name"> Joshep Mathew </span></p>
                    </div>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>
                </div>
            </article>
            <!-- End of news card -->

            <article class="news__card">
                <figure class="news__image">
                    <a href="blog_details.html">
                        <img src="Images/Article_image2.jpg" alt="Office environment" />
                </figure>
                <hr />
                </a>
                <div class="news__card__body">
                    <p class="category">Technology</p>
                    <p class="news__title">
                        Latest News Technology How you'll find accurate and timely
                        information on COVID-19 vaccines How you'll find accurate and
                        timely ?
                    </p>

                    <div class="user__profile">
                        <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                        <p>By <span class="user__name"> Joshep Mathew </span></p>
                    </div>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>
                </div>
            </article>

            <article class="news__card">
                <figure class="news__image">
                    <a href="blog_details.html">
                        <img src="Images/Article_image3.jpg" alt="Office environment" />
                </figure>
                <hr />
                </a>
                <div class="news__card__body">
                    <p class="category">Technology</p>
                    <p class="news__title">
                        Latest News Technology How you'll find accurate and timely
                        information on COVID-19 vaccines How you'll find accurate and
                        timely ?
                    </p>

                    <div class="user__profile">
                        <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                        <p>By <span class="user__name"> Joshep Mathew </span></p>
                    </div>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>
                </div>
            </article>

            <article class="news__card">
                <figure class="news__image">
                    <a href="blog_details.html">
                        <img src="Images/Article_image4.jpg" alt="Office environment" />
                    </a>
                </figure>
                <hr />
                <div class="news__card__body">
                    <p class="category">Technology</p>
                    <p class="news__title">
                        Latest News Technology How you'll find accurate and timely
                        information on COVID-19 vaccines How you'll find accurate and
                        timely ?
                    </p>

                    <div class="user__profile">
                        <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                        <p>By <span class="user__name"> Joshep Mathew </span></p>
                    </div>
                    <p class="upload__date">
                        <i class="fa-regular fa-calendar-days"></i>
                        May 5th 2004
                    </p>
                </div>
            </article>
        </section>
        <!-- End of article section -->

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
                <img src="Images/AdvertisementBanner.jpg" alt="Advertisnemt of certain product." />
            </div>
        </section>
    </section>
    <!-- End of aside section -->
</main>

<!-- Starting of slider section -->
<section class="swiper mySwiper slider__container">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <section class="swiper-slide news__slider">
            <figure class="news__slider__image">
                <img src="Images/previewImage.jpg" alt="Laptop and books" />
                <div class="arrow__buttons">
                    <i class="swiper-button-next"></i>
                    <i class="swiper-button-prev"></i>
                </div>
            </figure>

            <div class="news__slider__details">
                <p class="category">Technology</p>
                <p class="upload__date">
                    <i class="fa-regular fa-calendar-days"></i>
                    May 5th 2004
                </p>
                <a href="blog_details.html">
                    <h2 class="news__slider__title">
                        Spot Misinformation online with these tips
                    </h2>
                </a>
                <p class="news__slider__description">
                    How effectively the massive shopping center can repurpose more
                    than 300,000 square feet soon to be vacated.
                </p>
                <div class="user__profile">
                    <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                    <p>By <span class="user__name"> Joshep Mathew </span></p>
                </div>
            </div>
        </section>
        <!-- End of slide 1 -->

        <!-- Slide 2 -->
        <section class="swiper-slide news__slider">
            <figure class="news__slider__image">
                <img src="Images/Article_image2.jpg" alt="Laptop and books" />
                <div class="arrow__buttons">
                    <i class="swiper-button-next"></i>
                    <i class="swiper-button-prev"></i>
                </div>
            </figure>

            <div class="news__slider__details">
                <p class="category">Technology</p>
                <p class="upload__date">
                    <i class="fa-regular fa-calendar-days"></i>
                    May 5th 2004
                </p>
                <h2 class="news__slider__title">
                    Spot Misinformation online with these tips
                </h2>
                <p class="news__slider__description">
                    How effectively the massive shopping center can repurpose more
                    than 300,000 square feet soon to be vacated.
                </p>
                <div class="user__profile">
                    <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                    <p>By <span class="user__name"> Joshep Mathew </span></p>
                </div>
            </div>
        </section>
        <!-- End of slide 2 -->

        <!-- Slide 3 -->
        <section class="swiper-slide news__slider">
            <figure class="news__slider__image">
                <img src="Images/Article_image2.jpg" alt="Laptop and books" />
                <div class="arrow__buttons">
                    <i class="swiper-button-next"></i>
                    <i class="swiper-button-prev"></i>
                </div>
            </figure>

            <div class="news__slider__details">
                <p class="category">Technology</p>
                <p class="upload__date">
                    <i class="fa-regular fa-calendar-days"></i>
                    May 5th 2004
                </p>
                <h2 class="news__slider__title">
                    Spot Misinformation online with these tips
                </h2>
                <p class="news__slider__description">
                    How effectively the massive shopping center can repurpose more
                    than 300,000 square feet soon to be vacated.
                </p>
                <div class="user__profile">
                    <img src="Images/User-1.jpg" alt="User name Joshep Mathew" />
                    <p>By <span class="user__name"> Joshep Mathew </span></p>
                </div>
            </div>
        </section>
        <!-- End of slide 3 -->
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