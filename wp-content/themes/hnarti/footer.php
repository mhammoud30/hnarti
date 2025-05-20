<!-- Mobile Footer (Only visible on small screens) -->
<footer class="mobile-site-footer">
    <div class="mobile-footer-top">
        <div class="mobile-footer-container">
            <div class="mobile-footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hnartilogo.png" alt="Hnarti Footer Logo">
            </div>
            <div class="mobile-footer-content">
                <p class="mobile-footer-title">Be Part of the Hnaramid Community!</p>
                <p class="mobile-footer-subtitle">Join our mailing list to receive the latest updates and stories from our projects and events.</p>
                <form class="mobile-footer-form" action="#" method="post">
                    <input type="text" name="first_name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="mobile-footer-emblem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="Hnarti Emblem">
            </div>
        </div>
    </div>
    
    <div class="mobile-footer-bottom">
        <div class="mobile-footer-links">
            <div class="mobile-footer-copyright">
                <p>© 2025 Hnarti Cultural Platform. All rights reserved.</p>
            </div>
            <div class="mobile-back-to-top">
                <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/up-arrow.png" alt="Back to top"></a>
            </div>
        </div>
    </div>
</footer>

<!-- Desktop Footer (Original, only visible on larger screens) -->
<footer class="site-footer">
    <div class="footer-top">

    </div>

    <div class="footer-bottom">
    <div class="footer-container">
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hnartilogo.png" alt="Hnarti Footer Logo">
            </div>
            <div class="footer-content">
                <p class="footer-title">Be Part of the Hnaramid Community!</p>
                <p class="footer-subtitle">Join our mailing list to receive the latest updates and stories from our projects and events.</p>
                <form class="footer-form" action="#" method="post">
                    <input type="text" name="first_name" placeholder="Name" required>
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
                <p>© 2025 Hnarti Cultural Platform. All rights reserved.</p>
            </div>
            <div class="back-to-top">
                <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/up-arrow.png" alt="Back to top"></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>