<?php get_header(); ?>

<main id="primary" class="site-main">
    <section class="hero">
        <div class="hero-video-container">
            <video autoplay muted loop id="hero-video">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Website_Hero_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="hero-content">
            <div class="cta-button-container">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/join the mission button.png" alt="Compass background" class="img-video"></a>
            </div>
        </div>
    </section>

    <!-- Rest of the front page content will go here -->
    <section class="intro-section">
        <div class="intro-container">
            <p class="intro-text">
                We are Hnarti, a cultural platform dedicated to exploring
                Armenian heritage, particularly Western Armenian, through
                diverse social, artistic and cultural projects and events.
            </p>
            <div class="intro-button-container">
                <a href="#" class="intro-button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/our story button.png" alt="Compass background" class="img-intro"></a>
            </div>
        </div>
    </section>

    <section class="purpose-section">
        <div class="purpose-container">
            <div class="purpose-content">
                <div class="purpose-text">
                    <p class="purpose-p">We're on a mission to bridge our
                        past to our present, breathing new
                        life into our language and heritage,
                        and proving that together, we can
                        achieve the extraordinary!</p>
                </div>
                <div class="purpose-button">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/our purpose button.png" alt="Our Purpose" class="img-purpose"></a>
                </div>
            </div>
        </div>
        <div class="compass-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg" alt="Compass background" class="compass-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hands.png" alt="Compass hands" class="compass-hand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/center.png" alt="Compass center" class="compass-center">
        </div>
    </section>

    <section class="projects-section">
        <div class="what-were-up-to">
            <div class="background-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/blog background.png" alt="Connect background" class="wwut-background">
                <div class="content-overlay">
                    <h2 class="wwut-section-title">WHAT WE'RE UP TO</h2>
                    <div class="wwut-button-container">
                        <button class="wwut-image-button">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/projects.png" alt="Projects">
                        </button>
                        <div class="wwut-image-button">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/events.png" alt="Events">
                        </div>
                        <div class="wwut-image-button">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/community.png" alt="Community">
                        </div>
                    </div>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/take a look button.png" alt="Take a look"></a>
                </div>
            </div>
        </div>
    </section>


    <section class="lets-connect">
        <div class="connect-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinkRectangle.png" alt="Connect background" class="connect-background">
            <div class="connect-content">
                <p class="connect-title">LET'S CONNECT</p>
                <p class="connect-text">
                    If you like what we do and are interested in collaborating, do not hesitate
                    to get in touch. We are also seeking long-term sponsors. If our mission
                    aligns with your support criteria, we look forward to hearing from you.
                </p>
                <a href="#" class="connect-button">Message Us</a>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-icon.png" alt="Flower Icon" class="flower-icon left-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-icon.png" alt="Flower Icon" class="flower-icon right-icon">
    </section>

</main>

<?php get_footer(); ?>