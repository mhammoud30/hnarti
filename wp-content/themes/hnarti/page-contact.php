<?php get_header(); ?>

<section class="contact-section">
    <div class="container">
        <p class="container-title">Contact Us</p>

        <p class="contact-intro">Have a question or want to connect? Reach out and we'll be in touch soon!</p>

        <form class="contact-form" method="post" action="">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Name" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <textarea name="message" id="message" placeholder="Message..." required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn">Send</button>
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>