<footer class="footer__container">
    <section class="about__company">
        <figure class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/blogernpLogoFooter.png') }}" alt="logo" />
            </a>
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
                    <img src="{{ asset('assets/images/Facebook_logo.jpg') }}" alt="Facebook logo">
                </figure>
                <p class="likes"><span>1500</span> Likes</p>
                <button class="social__btn"><a href="#">Like</a></button>
            </div>
            <div class="social__card">
                <figure class="social__image">
                    <img src="{{ asset('assets/images/Twitter_logo.jpg') }}" alt="Twitter logo">
                </figure>
                <p class="likes"><span>1500</span> Tweets</p>
                <button class="social__btn"><a href="#">Tweet</a></button>
            </div>
            <div class="social__card">
                <figure class="social__image">
                    <img src="{{ asset('assets/images/Instagram_logo.jpg') }}" alt="Instagram logo">
                </figure>
                <p class="likes"><span>1500</span> Followers</p>
                <button class="social__btn"><a href="#">Follow</a></button>
            </div>
            <div class="social__card">
                <figure class="social__image">
                    <img src="{{ asset('assets/images/Youtube_logo.jpg') }}" alt="Youtube logo">
                </figure>
                <p class="likes"><span>1500</span> Subscribers</p>
                <button class="social__btn"><a href="#">Subscribe</a></button>
            </div>
        </div>
    </section>

    <section class="company__info">
        <h3 class="footer__headline">Company Info</h3>
        <div class="info__links">
            <a href="{{ route('about') }}">About us</a>
            <a href="#">Careers</a>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="{{ route('about') }}">Contact us</a>
            <a href="#">Archives</a>
            <a href="#">Local print ads</a>
            <a href="#">Coupons</a>
            <a href="{{ route('faq') }}">FAQ</a>
            <a href="#">Manage Web Notifications</a>
            <a href="#">Media kit</a>
            <a href="#">Chicago Tribune Store</a>
        </div>
    </section>
</footer>
