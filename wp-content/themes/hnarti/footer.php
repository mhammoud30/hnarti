<footer class="site-footer">
    <div class="footer-top">

    </div>

    <div class="footer-bottom">
    <div class="footer-container">
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hnartilogo.png" alt="Hnarti Footer Logo">
            </div>
            <div class="footer-content">
                <h2 class="footer-title">Be Part of the Hnaramid Community!</h2>
                <p class="footer-subtitle">Join our mailing list to receive the latest updates and stories from our projects and events.</p>
                <form class="footer-form" action="#" method="post">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="footer-emblem">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="Hnarti Emblem">
        </div>
        <div class="footer-links">
            <div class="footer-copyright">
                <p>© 2024 Hnarti Cultural Platform. All rights reserved.</p>
            </div>
            <div class="footer-policies">
                <a href="#">Terms & Conditions</a>
                <a href="#">Cookie & Privacy Policy</a>
            </div>
        </div>
        <div class="back-to-top">
            <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/up-arrow.png" alt="Back to top"></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>