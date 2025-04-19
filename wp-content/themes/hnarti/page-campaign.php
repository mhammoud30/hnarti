<?php

/**
 * Press‑release template
 * All copy is written directly in the markup so that designers can rely on
 * the exact character spacing and line breaks (use CSS `white-space: pre-line`).
 */
get_header();

/**
 * Icon filenames for the social bar.
 * (They aren’t “copy,” so we can still keep them in a tiny array.)
 */
$social_icons = [
    'twitter.png',
    'facebook.png',
    'instagram.png',
    'linkedin.png',
    'whatsapp.png',
    'email.png',
    'link.png'
];
?>

<div class="container">
    <div class="main-content">

        <h1 class="main-title">
            RECALL, RECONNECT, REVIVE:<br>
            A Campaign to Revitalize<br>
            Western Armenian
        </h1>

        <p class="release-date">
            RELEASE DATE: 11 AUG 2024 | BEIRUT, LEBANON
        </p>

        <!-- Social media icons -->
        <div class="social-icons">
            <?php foreach ($social_icons as $icon) : ?>
                <a href="#">
                    <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $icon; ?>"
                        alt="<?php echo pathinfo($icon, PATHINFO_FILENAME); ?>" />
                </a>
            <?php endforeach; ?>
        </div>

        <p class="intro-text">
            Hnarti Cultural Platform is proud to announce the launch of the "RECALL, RECONNECT, REVIVE"
            campaign, dedicated to the revitalization and preservation of the Western Armenian language.
            This initiative seeks to raise critical awareness about the endangered state of Western Armenian
            and encourage the community to reconnect with their linguistic and cultural roots.
        </p>

        <h2 class="section-title">A Bridge to Our Heritage</h2>

        <p class="highlight-text">
            “If Western Armenian dies, the genocide is complete.”
        </p>

        <p class="paragraph-text">
            Western Armenian, a language steeped in history and cultural significance, is at a critical juncture. In
            2010, it was classified as "definitely endangered" in the UNESCO Atlas of the World's Languages in
            Danger. This designation indicates that, without intervention, the language is at risk of becoming
            extinct in the near future, potentially within the next century.
        </p>

        <p class="paragraph-text" style="margin-top: 1%;">
            The "RECALL, RECONNECT, REVIVE" campaign addresses this pressing issue by bridging the gap that
            has emerged between the language and its speakers. By taking proactive steps to reconnect with our
            linguistic heritage, we aim to prevent Western Armenian from being eradicated. The bridge depicted
            in the campaign’s key visual serves as a metaphor for our mission to restore the link between past
            and present, ensuring that our language is revived and preserved for generations to come.
        </p>

        <h2 class="section-title">Campaign Objectives</h2>

        <p class="paragraph-text">
            This campaign has been developed with the aim of:
        </p>

        <ul class="objectives-list">
            <li>Increasing awareness of the language’s endangered status</li>
            <li>Communicating the importance and value of revitalizing our language</li>
            <li>Encouraging the active use and transmission of the language within the community</li>
        </ul>

        <h2 class="section-title">A Continuous Commitment</h2>

        <p class="paragraph-text">
            Recognizing the gravity of the task, the campaign will remain continuous until its goals are achieved,
            with annual updates to sustain momentum and engagement. Each year, new initiatives and activities
            will be introduced to keep the community involved and motivated.
        </p>

        <h2 class="section-title">Call to Action</h2>

        <p class="paragraph-text">
            Hnarti invites everyone to join this vital mission of becoming guardians of the Western Armenian 
            language. By coming together, we can ensure that our language not only survives but flourishes,
            bridging the gap between past and present.
        </p>

        <h2 class="section-title">About Hnarti</h2>

        <p class="paragraph-text">
            Hnarti is a cultural platform dedicated to the exploration of the Armenian heritage, particularly
            Western Armenian, through a variety of social, artistic and cultural projects and events. Our mission
            is to rediscover and revitalize Western Armenian through innovative approaches, connecting and
            inspiring a global community of Hnaramids.
        </p>
    </div><!-- /.main-content -->

    <!-- ─────────────────────────────────────────────── Sidebar ── -->
    <div class="sidebar">

        <a href="#" class="armenian-button">
            Press Release in Armenian
        </a>

        <div class="download-section">
            <h3 class="download-title">DOWNLOAD MEDIA</h3>
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/campaign-poster.png"
                alt="Campaign Visual"
                class="media-preview" />
        </div>

        <div class="download-section">
            <h3 class="download-title">DOWNLOAD PRESS RELEASE</h3>

            <div class="language-buttons">
                <div class="language-button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/en-flag.png" alt="en">
                    <span class="language-button-text">
                        Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian
                    </span>
                </div>
                <div class="language-button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/am-flag.png" alt="am">
                    <span class="language-button-text">
                        Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian
                    </span>
                </div>
                <div class="language-button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ar-flag.png" alt="ar">
                    <span class="language-button-text">
                        Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian
                    </span>
                </div>
                <div class="language-button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fr-flag.png" alt="fr">
                    <span class="language-button-text">
                        Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian
                    </span>
                </div>
            </div>
        </div>

        <div class="contact-section">
            <h3 class="contact-title">CONTACT</h3>
            <p class="contact-text">
                IF YOU HAVE ANY QUESTIONS PLEASE GET IN TOUCH
            </p>
            <a href="#" class="contact-button">CONTACT US</a>
        </div>
    </div><!-- /.sidebar -->
</div><!-- /.container -->

<?php get_footer(); ?>