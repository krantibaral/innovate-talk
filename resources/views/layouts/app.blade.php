<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogernp</title>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="CSS/style.css" />
</head>

<body>

    <!-- Start Preloader -->
    <div id="loader">
        <div class="spinner">
            <div class="cube cube0"></div>
            <div class="cube cube1"></div>
            <div class="cube cube2"></div>
            <div class="cube cube3"></div>
            <div class="cube cube4"></div>
            <div class="cube cube5"></div>
            <div class="cube cube6"></div>
            <div class="cube cube7"></div>
            <div class="cube cube8"></div>
            <div class="cube cube9"></div>
            <div class="cube cube10"></div>
            <div class="cube cube11"></div>
            <div class="cube cube12"></div>
            <div class="cube cube13"></div>
            <div class="cube cube14"></div>
            <div class="cube cube15"></div>
        </div>
    </div>
    <!-- End Preloader -->


    <!-- Header includes logo and navagation links -->
    <header class="navagation">
        <figure class="logo">
            <a href="index.html">
                <img src="Images/blogernpLogo.png" alt="logo" />
            </a>
        </figure>

        <hr />

        <input type="checkbox" id="nav_check" hidden>
        <nav class="nav__list">
            <ul>
                <li><a href="#">News & Launches</a></li>
                <li>
                    <a href="#">Reviews
                        <i class="fa-solid fa-chevron-down" style="color: #f9413f"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">TV Shows</a>
                    </ul>
                </li>
                <li>
                    <a href="#">Advice
                        <i class="fa-solid fa-chevron-down" style="color: #f9413f"></i>
                        <ul class="dropdown">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">TV Shows</a></li>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">PCQ 35</a></li>
                            <li><a href="#">Communities</a></li>
                            <li><a href="#">Mobile apps</a></li>
                            <li><a href="#">More</a></li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="#">Tech & Trends
                        <i class="fa-solid fa-chevron-down" style="color: #f9413f"></i>
                        <ul class="dropdown">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV Shows</a></li>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">PCQ 35</a></li>
                            <li><a href="#">Mobile apps</a></li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="#">Gaming
                        <i class="fa-solid fa-chevron-down" style="color: #f9413f"></i>
                        <ul class="dropdown">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV Shows</a></li>
                            <li><a href="#">PCQ 35</a></li>
                            <li><a href="#">Mobile apps</a></li>
                        </ul>
                    </a>
                </li>
                <li><a href="#">PCQ 35</a></li>
                <li>
                    <a href="#">Communities
                        <i class="fa-solid fa-chevron-down" style="color: #f9413f"></i>
                        <ul class="dropdown">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV Shows</a></li>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">PCQ 35</a></li>
                            <li><a href="#">Mobile apps</a></li>
                        </ul>
                    </a>
                </li>
                <li><a href="#">Mobile apps</a></li>
                <li>
                    <a href="#">More
                        <i class="fa-solid fa-chevron-down" style="color: #f9413f"></i>
                        <ul class="dropdown">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV Shows</a></li>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">PCQ 35</a></li>
                            <li><a href="#">Mobile apps</a></li>
                            <li><a href="#">More</a></li>
                        </ul>
                    </a>
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
        <hr />
    </header>
    <!-- End of header tag -->

    <!-- Preview section -->
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
    <!-- Advertisememnt Section Ends -->

    <!-- Footer Section -->
    <footer class="footer__container">
        <section class="about__company">
            <figure class="logo">
                <img src="Images/blogernpLogo.png" alt="logo" />
            </figure>
            <p class="company__description">Michael Madigan on Sunday was confronted with the reality that he lacks
                support
                from
                nearly a third. Michael Madigan on Sunday was confronted with the reality that he lacks support from
                nearly a
                third.Michael Madigan on Sunday was confronted with the reality that he lacks support from nearly a
                third.</p>
        </section>

        <section class="social__links">
            <h3 class="footer__headline">Social Connect</h3>
            <div class="social__container">
                <div class="social__card">
                    <figure class="social__image">
                        <img src="Images/Facebook_logo.jpg" alt="Facebook logo">
                    </figure>
                    <p class="likes"><Span>1500</Span> Likes</p>

                    <button class="social__btn"><a href="#">Like</a></button>
                </div>
                <div class="social__card">
                    <figure class="social__image">
                        <img src="Images/Twitter_logo.jpg" alt="Twitter logo">
                    </figure>
                    <p class="likes"><Span>1500</Span> Tweets</p>

                    <button class="social__btn"><a href="#">Tweet</a></button>
                </div>
                <div class="social__card">
                    <figure class="social__image">
                        <img src="Images/Instagram_logo.jpg" alt="Instagram logo">
                    </figure>
                    <p class="likes"><Span>1500</Span> Follower</p>

                    <button class="social__btn"><a href="#">Follow</a></button>
                </div>
                <div class="social__card">
                    <figure class="social__image">
                        <img src="Images/Youtube_logo.jpg" alt="Youtube logo">
                    </figure>
                    <p class="likes"><Span>1500</Span> Subscriber</p>
                    <button class="social__btn"><a href="#">Subscribe</a></button>
                </div>
            </div>
        </section>

        <section class="company__info">
            <h3 class="footer__headline">Company Info</h3>
            <div class="info__links">
                <a href="about_us.html">About us</a>
                <a href="#">Careers</a>
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Contact us</a>
                <a href="#">Archives</a>
                <a href="#">Local print ads</a>
                <a href="#">Coupons</a>
                <a href="#">FAQ</a>
                <a href="#">Manage Web Notifications</a>
                <a href="#">Media kit</a>
                <a href="#">Chicago Tribune Store</a>
        </section>
    </footer>
    <!-- Footer Section Ends -->


    <!-- Swiper JS CDN-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="JS/jquery.min.js"></script>
    <script src="JS/app.js"></script>
</body>

</html>
