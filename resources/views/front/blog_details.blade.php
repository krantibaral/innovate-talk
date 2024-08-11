@extends('layouts.app')

@section('content')
    <!-- Blog Details -->

    <section class="blog__details__container">
        <figure class="blog__image">
            <img src="{{ $article->getImage() }}" alt="{{ $article->title }}" />
        </figure>

        <section class="blog__details hidden">
            <p class="category  hidden">{{ $article->category->name }}</p>
            <p class="upload__date hidden">
                <i class="fa-regular fa-calendar-days"></i>
                {{ $article->created_at->format('F jS Y') }}
            </p>
            <h2 class="blog__title hidden">
                {{ $article->title }}
            </h2>

            <div class="user__profile hidden">
                <img src="{{ asset('assets/images/User-1.jpg') }}" alt="User name Joshep Mathew" />
                <p>By <span class="user__name"> {{ $article->user->name }} </span></p>
            </div>

            <div class="counter">
                <div class="stats__container">
                    <hr>
                    <div class="stats  hidden">
                        <i class="fa-regular fa-eye"></i>
                        <p>5k</p>
                    </div>
                    <hr>
                    <div class="stats  hidden">
                        <i class="fa-regular fa-heart"></i>
                        <p>5k</p>
                    </div>
                    <hr>
                    <div class="stats  hidden">
                        <i class="fa-regular fa-comments"></i>
                        <p>5k</p>
                    </div>
                </div>

                <div class="social__media">
                    <div class="social__card hidden">
                        <figure class="social__image">
                            <img src="{{ asset('assets/images/Facebook_logo.jpg') }}" alt="Facebook logo">
                        </figure>
                        <p class="share"><span>40</span> share</p>
                    </div>

                    <div class="social__card hidden">
                        <figure class="social__image">
                            <img src="{{ asset('assets/images/Twitter_logo.jpg') }}" alt="Twitter logo">
                        </figure>
                        <p class="share"><span>08</span> Tweet</p>
                    </div>

                    <div class="social__card hidden">
                        <figure class="social__image">
                            <img src="{{ asset('assets/images/Youtube_logo.jpg') }}" alt="Youtube logo">
                        </figure>
                        <p class="share"><span>20</span> Subscriber</p>
                    </div>
                </div>

            </div>
            <p class="blog__description hidden"> {!! $article->description !!}</p>

     

            @foreach ($advertisements as $advertisement)
                <section class="advertisement__section1">
                    <img src="{{ $advertisement->getImage() }}" alt="{{ $advertisement->title }}" loading="lazy" />
                </section>
            @endforeach

            <div class="blog__tags hidden">
                <li class="tag__name hidden">Popular</li>
                <li class="tag__name hidden">Design</li>
                <li class="tag__name hidden">UX</li>
            </div>

            <div class="new__page hidden">
                <button class="previous__page">Prev Post <span>Tips on Minimalist</span></button>
                <button class="next__page">Next Post <span>Less is more</span></button>
            </div>

            <section class="comment__container">
                <div class="comment__previews">
                    @foreach ($comments as $comment)
                        <div class="comment__card">
                            <div class="comment__head">
                                <div class="comment__user__profile">
                                    <i class="fas fa-user-circle" style="font-size: 30px;"></i>

                                    <div class="user__detail">
                                        <p class="user__name">{{ $comment->name }}</p>
                                        <p class="comment__date">{{ $comment->created_at->format('F j, Y') }}</p>
                                    </div>
                                </div>
                                {{-- <div class="heart__btn">
                                    <span class="heart"></span>
                                    <span class="number">0</span> <!-- Placeholder for like count -->
                                </div> --}}
                            </div>
                            <div class="comment__body">
                                <p class="description">{{ $comment->text }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="comment__post">
                    <h3>Leave your reply</h3>

                    <form action="{{ route('blog.comment', ['blogId' => $article->id]) }}" method="POST">
                        @csrf
                        <input type="text" name="name" class="post__description" placeholder="Enter your name"
                            required>
                        <textarea name="text" class="post__description" placeholder="Leave your thoughts." rows="5" required></textarea>
                        <button type="submit" class="post__btn">Post</button>
                    </form>
                </div>
            </section>

        </section>

        <section class="favourite__category">
            <h3 class="card__headline hidden">Favourite Category</h3>
            <section class="category__list">
                @foreach ($categories as $category)
                    <figure class="hidden">
                        <a href="#">
                            <!-- You can use category-specific assets/images if available -->
                            <img src="{{ $category->getImage() }}" alt="{{ $category->title }}" />
                        </a>
                        <figcaption>{{ $category->name }}</figcaption>
                    </figure>
                @endforeach
            </section>
        </section>


        <main class="chamber">
            <section class="wrapper">
                <h3 class="card__headline">Most popular</h3>
                <section class="card__container">
                    @foreach ($recentlyViewedBlogs as $blog)
                        <article class="card">
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

                                <p class="card__title">
                                    {{ $blog->title }}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </section>
            </section>
        </main>


        @foreach ($advertisements as $advertisement)
            <section class="advertisement__section1 hidden">
                <img src="{{ $advertisement->getImage() }}" alt="{{ $advertisement->title }}" loading="lazy" />
            </section>
        @endforeach
    </section>

    <!-- Blog Details Ends -->
@endsection
