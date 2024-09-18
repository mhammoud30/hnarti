<footer class="site-footer">
    <div class="footer-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="Hnarti Footer Logo">
    </div>
    <div class="footer-container">

        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hnartilogo.png" alt="Hnarti Footer Logo">
        </div>
        <div class="footer-content">
            <h2 class="footer-title">Be Part of the Hnaramid Community!</h2>
            <h4 class="footer-subtitle">Join our mailing list to receive the latest updates and stories from our projects and events.</h4>
            <form class="footer-form" action="#" method="post">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <button type="submit">Submit</button>
            </form>

        </div>


    </div>
    <div class="footer-links">
        <p class="footer-copyright">© 2024 Hnarti Cultural Platform. All rights reserved.</p>
        <p href="#">Terms & Conditions</p> |
        <p href="#">Cookie & Privacy Policy</p>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>