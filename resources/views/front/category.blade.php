@extends('layouts.app')

@section('content')
    <!-- Preview section -->
    <section class="preview">
        <figure class="preview__image">
            <img src="{{ $category->getImage() }}" alt="{{ $category->title }}" />
        </figure>

        <div class="preview__details">
            <h2 class="category__title">{{ $category->name }}</h2>
        </div>
    </section>
    <!-- End of preview section -->

    <main class="blogs__container">
        <section class="wrapper">
            <!-- Start of article section -->
            <section class="blog__container">
                @foreach($blogs as $blog)
                <article class="row">
                    <div class="card column-100">
                        <figure class="card__image">
                            <a href="{{ route('blog_details', $blog->slug) }}">
                                <img src="{{ $blog->getImage() }}" alt="{{ $blog->title }}" />
                            </a>
                        </figure>

                        <div class="card__body">
                            <p class="category">{{ $category->name }}</p>
                            <p class="card__title">
                                {{ $blog->title }}
                            </p>

                            <div class="user__profile">
                                <img src="{{ $blog->user->profile_image ? asset('storage/' . $latestBlog->user->profile_image) : asset('assets/images/User-1.jpg') }}">
                                <p>By <span class="user__name"> {{ $blog->user->name }} </span></p>
                            </div>
                            <p class="upload__date">
                                <i class="fa-regular fa-calendar-days"></i>
                                {{ $blog->created_at->format('F jS, Y') }}
                            </p>

                        </div>
                    </div>
                </article>
                @endforeach
            </section>
            <!-- End of article section -->

            <!-- Start of aside section -->
            <section class="advertisement__container">
                <h3 class="advertisement__headline">Advertisement</h3>

                @foreach($advertisements as $advertisement)
                <div class="advertisement__section">
                    <img src="{{ $advertisement->getImage() }}" alt="Advertisement of {{ $advertisement->title }}" />
                </div>
                @endforeach
            </section>
            <!-- End of aside section -->
        </section>
    </main>

    <!-- Advertisememnt Section -->
    @foreach($advertisements as $advertisement)
    <section class="advertisement__section1">
        <img src="{{ $advertisement->getImage() }}" alt="Advertisement Banner">
    </section>
    @endforeach
    <!-- Advertisememnt Section Ends -->
@endsection
