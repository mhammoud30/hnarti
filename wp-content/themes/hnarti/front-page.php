<?php get_header(); ?>

<main id="primary" class="site-main">
    <section class="hero">
        <div class="hero-video-container">
            <video autoplay muted loop id="hero-video">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/hero-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">"IF WESTERN ARMENIAN DIES, THE GENOCIDE IS COMPLETE."</h1>
            <div class="hero-slogan">
                <span>RECALL</span>
                <span>RECONNECT</span>
                <span>REVIVE</span>
            </div>
            <div class="cta-button-container">
                <a href="#" class="cta-button">Join the Mission</a>
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
            <button href="#" class="intro-button">Our Story</button>
        </div>
    </section>

    <section class="purpose-section">
        <div class="purpose-container">
            <div class="purpose-content">
                <div class="purpose-text">
                    <p class="purpose-p">We're on a mission to bridge our past to our present, breathing new life into our language and heritage, and proving that together, we can achieve the extraordinary!</p>
                    <button class="purpose-button">Our Purpose</button>
                </div>
            </div>
        </div>
        <div class="compass-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg" alt="Compass background" class="compass-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hands.png" alt="Compass hands" class="compass-hand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/center.png" alt="Compass center" class="compass-center">
        </div>
    </section>

    <section class="what-were-up-to">
        <h2 class="wwut-section-title">WHAT WE'RE UP TO</h2>
        <div class="wwut-button-container">
            <button class="wwut-image-button">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects.jpg" alt="Projects">
                <span>PROJECTS</span>
            </button>
            <div class="wwut-image-button">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events.jpg" alt="Events">
                <span>EVENTS</span>
            </div>
            <div class="wwut-image-button">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community.jpg" alt="Community">
                <span>COMMUNITY</span>
            </div>
        </div>
    </section>

    <section class="follow-along">
        <div class="container">
            <h2>FOLLOW ALONG</h2>

            <div class="handle">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <a href="https://www.instagram.com/hnarti_official/">Hnarti_Official - Հնարդի</a>
            </div>

            <div class="instagram-grid">
                <!-- Instagram Post 1 -->
                <a href="https://www.instagram.com/p/POST_ID_1/" target="_blank" rel="noopener noreferrer">
                    <img src="/api/placeholder/220/220" alt="Instagram post 1" />
                </a>

                <!-- Instagram Post 2 -->
                <a href="https://www.instagram.com/p/POST_ID_2/" target="_blank" rel="noopener noreferrer">
                    <img src="/api/placeholder/220/220" alt="Instagram post 2" />
                </a>

                <!-- Instagram Post 3 -->
                <a href="https://www.instagram.com/p/POST_ID_3/" target="_blank" rel="noopener noreferrer">
                    <img src="/api/placeholder/220/220" alt="Instagram post 3" />
                </a>

                <!-- Instagram Post 4 -->
                <a href="https://www.instagram.com/p/POST_ID_4/" target="_blank" rel="noopener noreferrer">
                    <img src="/api/placeholder/220/220" alt="Instagram post 4" />
                </a>

                <!-- Instagram Post 5 -->
                <a href="https://www.instagram.com/p/POST_ID_5/" target="_blank" rel="noopener noreferrer">
                    <img src="/api/placeholder/220/220" alt="Instagram post 5" />
                </a>
            </div>
        </div>
    </section>


    <section class="lets-connect">
        <div class="connect-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle.png" alt="Connect background" class="connect-background">
            <div class="connect-content">
                <h2 class="connect-title">LET'S CONNECT</h2>
                <p class="connect-text">
                    If you like what we do and are interested in collaborating, do not hesitate to get in touch.
                    We are also seeking long-term sponsors. If our mission aligns with your support criteria,
                    we look forward to hearing from you.
                </p>
                <a href="#" class="connect-button">Message Us</a>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-icon.png" alt="Flower Icon" class="flower-icon left-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-icon.png" alt="Flower Icon" class="flower-icon right-icon">
    </section>

</main>

<?php get_footer(); ?>