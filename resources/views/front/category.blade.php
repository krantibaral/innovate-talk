@extends('layouts.app')

@section('content')
    <!-- Preview section -->
    <section class="preview">
        <figure class="preview__image">
            <img src="Assets/Images/previewImage.jpg" alt="Laptop and books" />
        </figure>

        <div class="preview__details">
            <h2 class="category__title">{{ $category->name }}</h2>
    </section>
    <!-- End of preview section -->

    <main class="blogs__container">
        <section class="wrapper">
            <!-- Start of article section -->
            <section class="blog__container">
                <!-- <h3 class="news__headline hidden">Category Name</h3> -->


                <article class="row">
                    <div class="card hidden column-50">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image2.jpg" alt="Office environment" />
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

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                        </div>
                    </div>

                    <div class="card hidden column-50">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image1.jpg" alt="Office environment" />
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

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="row">
                    <div class="card hidden column-100">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image4.jpg" alt="Office environment" />
                            </a>
                        </figure>

                        <div class="card__body">
                            <p class="category">Technology</p>
                            <p class="card__title">
                                Latest News Technology How you'll find accurate and timely
                                information on COVID-19 vaccines How you'll find accurate and
                                timely ?
                            </p>

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                            <p class="upload__date">
                                <i class="fa-regular fa-calendar-days"></i>
                                May 5th 2004
                            </p>

                        </div>
                    </div>
                </article>


                <article class="row">
                    <div class="card hidden column-50">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image2.jpg" alt="Office environment" />
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

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                        </div>
                    </div>

                    <div class="card hidden column-50">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image1.jpg" alt="Office environment" />
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

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="row">
                    <div class="card hidden column-100">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image4.jpg" alt="Office environment" />
                            </a>
                        </figure>

                        <div class="card__body">
                            <p class="category">Technology</p>
                            <p class="card__title">
                                Latest News Technology How you'll find accurate and timely
                                information on COVID-19 vaccines How you'll find accurate and
                                timely ?
                            </p>

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                            <p class="upload__date">
                                <i class="fa-regular fa-calendar-days"></i>
                                May 5th 2004
                            </p>

                        </div>
                    </div>
                </article>

                <article class="row">
                    <div class="card hidden column-100">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image4.jpg" alt="Office environment" />
                            </a>
                        </figure>

                        <div class="card__body">
                            <p class="category">Technology</p>
                            <p class="card__title">
                                Latest News Technology How you'll find accurate and timely
                                information on COVID-19 vaccines How you'll find accurate and
                                timely ?
                            </p>

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                            <p class="upload__date">
                                <i class="fa-regular fa-calendar-days"></i>
                                May 5th 2004
                            </p>

                        </div>
                    </div>
                </article>

                <article class="row">
                    <div class="card hidden column-50">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image2.jpg" alt="Office environment" />
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

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                        </div>
                    </div>

                    <div class="card hidden column-50">
                        <figure class="card__image">
                            <a href="blog_details_premium.html">
                                <img src="Assets/Images/Article_image1.jpg" alt="Office environment" />
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

                            <div class="user__profile">
                                <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                                <p>By <span class="user__name"> Joshep Mathew </span></p>
                            </div>
                        </div>
                    </div>
                </article>

            </section>
            <!-- End of article section -->

            <!-- Start of aside section -->
            <section class="advertisement__container hidden">
                <h3 class="advertisement__headline">Advertisemnet</h3>

                <div class="advertisement__section hidden">
                    <img src="Assets/Images/AdvertisementBanner.jpg" alt="Advertisnemt of certain product." />
                </div>

                <div class="advertisement__section hidden">
                    <img src="Assets/Images/AdvertisementBanner.jpg" alt="Advertisnemt of certain product." />
                </div>

                <div class="advertisement__section hidden">
                    <img src="Assets/Images/AdvertisementBanner.jpg" alt="Advertisnemt of certain product." />
                </div>
            </section>
        </section>
        <!-- End of aside section -->
    </main>

    <!-- Advertisememnt Section -->
    <section class="advertisement__section1 hidden">
        <img src="Assets/Images/AdvertisementBanner.jpg" alt="Advertisement Banner">
    </section>

    <section class="advertisement__section2 hidden">
        <img src="Assets/Images/AdvertisementBanner.jpg" alt="Advertisement Banner">
    </section>
    <!-- Advertisememnt Section Ends -->
@endsection
