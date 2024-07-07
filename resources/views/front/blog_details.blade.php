@extends('layouts.app')
@section('content')
    <!-- Blog Details -->
    <section class="blog__details__container">
        <figure class="blog__image">
            <img src="{{ $article->getImage() }}" alt="{{ $article->title }}" />
        </figure>

        <section class="blog__details">
            <p class="category">{{ $article->category->name }}</p>
            <p class="upload__date">
                <i class="fa-regular fa-calendar-days"></i>
                {{ $article->created_at->format('F jS Y') }}
            </p>
            <h2 class="blog__title">
                {{ $article->title }}
            </h2>

            <div class="user__profile">
                <img src="{{ asset('Images/User-1.jpg') }}" alt="User name Joshep Mathew" />

                <p>By <span class="user__name"> Joshep Mathew </span></p>
            </div>

            <div class="counter">
                <div class="stats__container">
                    <hr>
                    <div class="stats">
                        <i class="fa-regular fa-eye"></i>
                        <p>5k</p>
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa-regular fa-heart"></i>
                        <p>5k</p>
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa-regular fa-comments"></i>
                        <p>5k</p>
                    </div>
                </div>

                <div class="social__media">
                    <div class="social__card">
                        <figure class="social__image">
                            <img src="{{ asset('Images/Facebook_logo.jpg') }}" alt="Facebook logo">
                        </figure>
                        <p class="share"><span>40</span> share</p>
                    </div>

                    <div class="social__card">
                        <figure class="social__image">
                            <img src="{{ asset('Images/Twitter_logo.jpg') }}" alt="Twitter logo">
                        </figure>
                        <p class="share"><span>08</span> Tweet</p>
                    </div>

                    <div class="social__card">
                        <figure class="social__image">
                            <img src="{{ asset('Images/Youtube_logo.jpg') }}" alt="Youtube logo">
                        </figure>
                        <p class="share"><span>20</span> Subscriber</p>
                    </div>
                </div>

            </div>

            <p class="blog__description">{!! $article->description !!}</p>



            <span class="quote">
                Lining concealed back zip fasten swing style high waisted double
                layer full pattern floral creating your app package.
                <img src="Images/quotes.png" alt="">
                <div class="user__profile">
                    <p>By <span class="user__name"> Joshep Mathew </span></p>
                </div>
            </span>

            <p class="blog__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quam illo in
                repellat, nesciunt saepe? Magni repellendus rerum eveniet fugiat pariatur, et, porro, tenetur quo impedit
                aliquid perspiciatis accusantium quod!</p>

            <ul class="key__points">
                <li>Once you have installed the App Studio app in your Teams client</li>
                <li>App Studio will guide you through</li>
                <li>Web services up and running, you’ll need to create an app package that can be distributed and installed
                </li>
            </ul>

            <h4 class="sub__blog__title">Working Process</h4>
            <p class="blog__description">He gave the example of a plumber sending an invoice, and how they can tell if
                someone
                starts to create an invoice and can’t make it through the whole process. For a small business entrepreneur,
                “that’s a big deal because that means they’re not going to get paid, which means that tuition payment for
                their
                kid in college may be in jeopardy. So we take that really, really seriously hihihih.”</p>
            <p class="blog__description">Are looking beyond idealization stage to, at the very least, beta, and for
                companies
                that are corporate-ready.
                Retailers want to see it all, so they usually have not precisely identified one tech they want to focus on.
                Visual search and fit-tech are definitely trends.</p>

            <div class="blog__details__image">
                <img src="{{ asset('Images/Article_image2.jpg') }}" alt="">
                <img src="{{ asset('Images/Article_image3.jpg') }}" alt="">
                <img src="{{ asset('Images/Article_image4.jpg') }}" alt="">
            </div>


            <div class="advertisement__section1">
                <p class="blog__adv__title">Advertisement</p>
                <img src="{{ asset('Images/AdvertisementBanner.jpg') }}" alt="Advertisement Banner">
            </div>

            <div class="blog__tags">
                <li class="tag__name">Popular</li>
                <li class="tag__name">Design</li>
                <li class="tag__name">UX</li>
            </div>

            <div class="new__page">
                <button class="previous__page">Prev Post <span>Tips on Minimalist</span></button>
                <button class="next__page">Next Post <span>Less is more</span></button>
            </div>
        </section>
        <section class="comment__container">
            <div class="comment__previews">

                <div class="comment__card hidden">
                    <div class="comment__head">
                        <div class="user__profile">
                            <img src="Assets/Images/teamMember1.jpg" alt="User name Joshep Mathew" />
                            <div class="user__detail">
                                <p class="user__name"> Joshep Mathew </p>
                                <p class="comment__date">April 12, 2021</p>
                            </div>
                        </div>
                        <div class="heart__btn">
                            <spaan class="heart"></spaan>
                            <spaan class="number">15</spaan>
                        </div>
                    </div>

                    <div class="comment__body">
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum odio sed
                            assumenda
                            recusandae hic, est provident corrupti. Nihil ex reprehenderit, quis consectetur facilis dicta
                            commodi,
                            voluptas esse fugit iste numquam veritatis quasi eius eligendi necessitatibus dolorem odit et
                            odio cum
                            id
                            totam? Quod voluptates non repudiandae illo inventore et accusamus.</p>
                    </div>
                </div>

                <div class="comment__card hidden">
                    <div class="comment__head">
                        <div class="user__profile">
                            <img src="Assets/Images/User-1.jpg" alt="User name Joshep Mathew" />
                            <div class="user__detail">
                                <p class="user__name"> Joshep Mathew </p>
                                <p class="comment__date">April 12, 2021</p>
                            </div>
                        </div>
                        <div class="heart__btn">
                            <spaan class="heart"></spaan>
                            <spaan class="number">190</spaan>
                        </div>
                    </div>

                    <div class="comment__body">
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum odio sed
                            assumenda
                            recusandae hic, est provident corrupti. Nihil ex reprehenderit, quis consectetur facilis dicta
                            commodi,
                            voluptas esse fugit iste numquam veritatis quasi eius eligendi necessitatibus dolorem odit et
                            odio cum
                            id
                            totam? Quod voluptates non repudiandae illo inventore et accusamus.</p>
                    </div>
                </div>

                <div class="comment__card hidden">
                    <div class="comment__head">
                        <div class="user__profile">
                            <img src="Assets/Images/teamMember3.jpg" alt="User name Joshep Mathew" />
                            <div class="user__detail">
                                <p class="user__name"> Joshep Mathew </p>
                                <p class="comment__date">April 12, 2021</p>
                            </div>
                        </div>
                        <div class="heart__btn">
                            <spaan class="heart"></spaan>
                            <spaan class="number">50</spaan>
                        </div>
                    </div>

                    <div class="comment__body">
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum odio sed
                            assumenda
                            recusandae hic, est provident corrupti. Nihil ex reprehenderit, quis consectetur facilis dicta
                            commodi,
                            voluptas esse fugit iste numquam veritatis quasi eius eligendi necessitatibus dolorem odit et
                            odio cum
                            id
                            totam? Quod voluptates non repudiandae illo inventore et accusamus.</p>
                    </div>
                </div>

                <div class="comment__card hidden">
                    <div class="comment__head">
                        <div class="user__profile">
                            <img src="Assets/Images/teamMember4.jpg" alt="User name Joshep Mathew" />
                            <div class="user__detail">
                                <p class="user__name"> Joshep Mathew </p>
                                <p class="comment__date">April 12, 2021</p>
                            </div>
                        </div>
                        <div class="heart__btn">
                            <spaan class="heart"></spaan>
                            <spaan class="number">20</spaan>
                        </div>
                    </div>

                    <div class="comment__body">
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum odio sed
                            assumenda
                            recusandae hic, est provident corrupti. Nihil ex reprehenderit, quis consectetur facilis dicta
                            commodi,
                            voluptas esse fugit iste numquam veritatis quasi eius eligendi necessitatibus dolorem odit et
                            odio cum
                            id
                            totam? Quod voluptates non repudiandae illo inventore et accusamus.</p>
                    </div>
                </div>

                <div class="comment__card hidden">
                    <div class="comment__head">
                        <div class="user__profile">
                            <img src="Assets/Images/teamMember2.jpg" alt="User name Joshep Mathew" />
                            <div class="user__detail">
                                <p class="user__name"> Joshep Mathew </p>
                                <p class="comment__date">April 12, 2021</p>
                            </div>
                        </div>
                        <div class="heart__btn">
                            <spaan class="heart"></spaan>
                            <spaan class="number">99</spaan>
                        </div>
                    </div>

                    <div class="comment__body">
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum odio sed
                            assumenda
                            recusandae hic, est provident corrupti. Nihil ex reprehenderit, quis consectetur facilis dicta
                            commodi,
                            voluptas esse fugit iste numquam veritatis quasi eius eligendi necessitatibus dolorem odit et
                            odio cum
                            id
                            totam? Quod voluptates non repudiandae illo inventore et accusamus.</p>
                    </div>
                </div>
            </div>

            <div class="comment__post">
                <h3 class="hidden">Leave your reply</h3>

                <form action="">
                    <div class="user__profile">
                        <img class="hidden" src="Assets/Images/teamMember2.jpg" alt="User name Joshep Mathew" />
                        <p class="user__name hidden"> Sandesh Timilsina </p>
                    </div>
                    <textarea name="" id="" class="post__description hidden" placeholder="Leave your thoughts."
                        rows="10"></textarea>
                    <button class="post__btn hidden">Post</button>
                </form>
            </div>
        </section>
    </section>

    <section class="favourite__category">
        <h3 class="card__headline">Favourite Category</h3>
        <section class="category__list">
            <figure>
                <a href="#">
                    <img src="{{ asset('Images/sports.jpg') }}" alt="">
                    <figcaption>Sports</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/covid.jpg') }}" alt="">
                    <figcaption>Covid-19</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/journal.jpg') }}" alt="">
                    <figcaption>Journal</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/beating.jpg') }}" alt="">
                    <figcaption>Beating</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/movie.jpg') }}" alt="">
                    <figcaption>Movies</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/magazine.jpg') }}" alt="">
                    <figcaption>Magazine</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/film.jpg') }}" alt="">
                    <figcaption>Films</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/games.jpg') }}" alt="">
                    <figcaption>Games</figcaption>
                </a>
            </figure>

            <figure>
                <a href="#">
                    <img src="{{ asset('Images/nature.jpg') }}" alt="">
                    <figcaption>Nature</figcaption>
                </a>
            </figure>

        </section>
    </section>

    <main class="chamber">
        <section class="wrapper">
            <h3 class="card__headline">Most popular</h3>
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

    <div class="advertisement__section1">
        <img src="Images/AdvertisementBanner.jpg" alt="Advertisement Banner">
    </div>
    </section>

    <!-- Blog Details Ends -->
@endsection
