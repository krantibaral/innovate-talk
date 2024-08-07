<!--  -->
@extends('layouts.app')
@section('content')
    <main class="about__container">
        <figure class="preview__image">
            <img src="assets/images/Article_image3.jpg" alt="Laptop and books" />
        </figure>

        <div class="company__details">
            <h1 class="hidden company__name">Able Innovations</h1>
            <p class="hidden slogan">Enhance your knowledge to next Level</p>
            <button class="hidden explore__btn">
                <a href="{{ route('welcome') }}">Explore Now</a>
            </button>
        </div>

    </main>


    <section class="company__info__container">
        <figure class="hidden company__image">
            <img src="assets/images/Article_image1.jpg" alt="Laptop and books" />
        </figure>

        <div class="company__information">
            <h1 class="hidden company__name">Able Innovations</h1>
            <p class="hidden description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae excepturi
                veritatis
                corrupti impedit tempore ea aliquam eligendi cupiditate perspiciatis expedita non rerum natus tenetur ad,
                odio
                provident pariatur nisi? Atque dignissimos laudantium dicta nam cupiditate? Aspernatur ex corrupti in natus
                expedita officia non? Libero animi illo asperiores odio repellendus exercitationem tempore eos quis
                reprehenderit dolorum cumque magnam, vero suscipit alias!</p>
        </div>
    </section>

    <section class="company__team">
        <div class="hidden team__information">
            <h1 class="team__title">Our Team</h1>
            <p class="description">Meet the dedicated and hardworking individuals behind Blooger NP. Our exceptional team is
                passionately committed to delivering the highest standards of excellence and consistently adding significant
                value to ensure your experience with us is nothing short of outstanding.</p>
        </div>

        <div class="team__members">
            <div class="image__wrapper">
                <figure class="members__bio hidden" data-parent="Ram Bahadur">
                    <img src="assets/images/teamMember1.jpg" alt="Image of Team member Ram" loading="lazy" />
                </figure>

                <figure class="members__bio hidden" data-parent="Emma Jackson">
                    <img src="assets/images/teamMember3.jpg" alt="Image of Team member Emma" loading="lazy" />
                </figure>

                <figure class="members__bio hidden" data-parent="Luke Paul">
                    <img src="assets/images/teamMember2.jpg" alt="Image of Team member Luke" loading="lazy" />
                </figure>

                <figure class="members__bio hidden" data-parent="Jenny Simit">
                    <img src="assets/images/teamMember4.jpg" alt="Image of Team member Jenny" loading="lazy" />
                </figure>
            </div>
        </div>
    </section>

    <section id="contact__us" class="contact__us" data-image="url(assets/images/buildingsAtNight2.jpg)">
        <div class="contact__info">
            <h1 class="contact__title hidden ">Contact Us</h1>
            <p class="contact__description hidden ">We're here to help and answer any question you might have. We look
                forward
                to
                hearing from you!</p>
            <p class="contact__email hidden ">Email us at: <a href="mailto:support@example.com"
                    class="contact__link hidden ">support@example.com</a></p>
            <p class="contact__phone hidden ">Call us: <span class="contact__phone-number">(123) 456-7890</span></p>
            <p class="contact__address hidden ">Visit us at: <span class="contact__address-text">123 Main Street, Your City,
                    Your
                    Country</span></p>
        </div>

        <div class="contact__page hidden">
            <h1>CONTACT US!</h1>
            <form action="{{ route('contact-submit') }}" method="post" class="contact__form">
                @csrf
                <div class="input__container">
                    <div class="input__box">
                        <label for="first__name">First Name <span class="star">*</span></label>
                        <input type="text" id="firstName" name="firstName" placeholder="Your First Name" required>
                    </div>

                    <div class="input__box">
                        <label for="last__name">Last Name <span class="star">*</span></label>
                        <input type="text" id="lastName" name="lastName" placeholder="Your Last Name" required>
                    </div>
                </div>

                <label for="email">Email <span class="star">*</span></label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="message">Message <span class="star">*</span></label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Contact Our Agents Now!</button>
            </form>

        </div>
    </section>
@endsection
