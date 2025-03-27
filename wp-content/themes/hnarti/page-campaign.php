<?php get_header();
$content = [
    'main_title' => 'RECALL, RECONNECT, REVIVE:<br>A Campaign to Revitalize<br>Western Armenian',
    'release_date' => 'RELEASE DATE: 11 AUG 2024 | BEIRUT, LEBANON',
    'intro_text' => 'Hnarti Cultural Platform is proud to announce the launch of the "RECALL, RECONNECT, REVIVE"
     campaign, dedicated to the revitalization and preservation of the Western Armenian language.
    This initiative seeks to raise critical awareness about the endangered state of Western Armenian
    and encourage the community to reconnect with their linguistic and cultural roots.',
    'bridge_title' => 'A Bridge to Our Heritage',
    'highlight_text' => '"If Western Armenian dies, the genocide is complete."',
    'bridge_text' => 'Western Armenian, a language steeped in history and cultural significance, is at a critical juncture. In 2010, it was classified as "definitely endangered" in the UNESCO Atlas of the World\'s Languages in Danger. This designation indicates that, without intervention, the language is at risk of becoming extinct in the near future, potentially within the next century.',
    'campaign_text' => 'The "RECALL, RECONNECT, REVIVE" campaign addresses this pressing issue by bridging the gap that has emerged between the language and its speakers. By taking proactive steps to reconnect with our linguistic heritage, we aim to prevent Western Armenian from being eradicated. The bridge depicted in the campaign\'s key visual serves as a metaphor for our mission to restore the link between past and present, ensuring that our language is revived and preserved for generations to come.',
    'objectives_title' => 'Campaign Objectives',
    'objectives_intro' => 'This campaign has been developed with the aim of:',
    'objectives' => [
        'Increasing awareness of the language\'s endangered status',
        'Communicating the importance and value of revitalizing our language',
        'Encouraging the active use and transmission of the language within the community.'
    ],
    'commitment_title' => 'A Continuous Commitment',
    'commitment_text' => 'Recognizing the gravity of the task, the campaign will remain continuous until its goals are achieved, with annual updates to sustain momentum and engagement. Each year, new initiatives and activities will be introduced to keep the community involved and motivated.',
    'call_title' => 'Call to Action',
    'call_text' => 'Hnarti invites everyone to join this vital mission of becoming guardians of the Western Armenian language. By coming together, we can ensure that our language not only survives but flourishes, bridging the gap between past and present.',
    'about_title' => 'About Hnarti',
    'about_text' => 'Hnarti is a cultural platform dedicated to the exploration of the Armenian heritage, particularly Western Armenian, through a variety of social, artistic and cultural projects and events. Our mission is to rediscover and revitalize Western Armenian through innovative approaches, connecting and inspiring a global community of Hnaramids.',
    'armenian_button' => 'Press Release in Armenian',
    'download_media' => 'DOWNLOAD MEDIA',
    'download_press' => 'DOWNLOAD PRESS RELEASE',
    'language_buttons' => [
        'EN' => 'Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian',
        'AM' => 'Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian',
        'AR' => 'Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian',
        'FR' => 'Recall, Reconnect, Revive: A Campaign to Revitalize Western Armenian'
    ],
    'contact_title' => 'CONTACT',
    'contact_text' => 'IF YOU HAVE ANY QUESTIONS PLEASE GET IN TOUCH',
    'contact_button' => 'CONTACT US'
];

// Social media icons
$social_icons = ['twitter.png', 'facebook.png', 'instagram.png', 'linkedin.png', 'whatsapp.png', 'email.png', 'link.png'];

?>

<div class="container">
        <div class="main-content">
            <h1 class="main-title"><?php echo $content['main_title']; ?></h1>
            <p class="release-date"><?php echo $content['release_date']; ?></p>
            
            <div class="social-icons">
                <?php foreach ($social_icons as $icon): ?>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/<?php echo $icon ?>" alt="<?php echo pathinfo($icon, PATHINFO_FILENAME); ?>"></a>
                <?php endforeach; ?>
            </div>
            
            <p class="intro-text"><?php echo $content['intro_text']; ?></p>
            
            <h2 class="section-title"><?php echo $content['bridge_title']; ?></h2>
            <p class="highlight-text"><?php echo $content['highlight_text']; ?></p>
            <p class="paragraph-text"><?php echo $content['bridge_text']; ?></p>
            
            <p class="paragraph-text"><?php echo $content['campaign_text']; ?></p>
            
            <h2 class="section-title"><?php echo $content['objectives_title']; ?></h2>
            <p class="paragraph-text"><?php echo $content['objectives_intro']; ?></p>
            <ul class="objectives-list">
                <?php foreach ($content['objectives'] as $objective): ?>
                <li><?php echo $objective; ?></li>
                <?php endforeach; ?>
            </ul>
            
            <h2 class="section-title"><?php echo $content['commitment_title']; ?></h2>
            <p class="paragraph-text"><?php echo $content['commitment_text']; ?></p>
            
            <h2 class="section-title"><?php echo $content['call_title']; ?></h2>
            <p class="paragraph-text"><?php echo $content['call_text']; ?></p>
            
            <h2 class="section-title"><?php echo $content['about_title']; ?></h2>
            <p class="paragraph-text"><?php echo $content['about_text']; ?></p>
        </div>
        
        <div class="sidebar">
            <a href="#" class="armenian-button"><?php echo $content['armenian_button']; ?></a>
            
            <div class="download-section">
                <h3 class="download-title"><?php echo $content['download_media']; ?></h3>
                <img src="images/campaign-poster.png" alt="Campaign Visual" class="media-preview">
            </div>
            
            <div class="download-section">
                <h3 class="download-title"><?php echo $content['download_press']; ?></h3>
                
                <div class="language-buttons">
                    <?php foreach ($content['language_buttons'] as $lang => $text): ?>
                    <div class="language-button">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/<?php echo strtolower($lang); ?>-flag.png" alt="<?php echo $lang; ?>">
                        <span class="language-button-text"><?php echo $text; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="contact-section">
                <h3 class="contact-title"><?php echo $content['contact_title']; ?></h3>
                <p class="contact-text"><?php echo $content['contact_text']; ?></p>
                <a href="#" class="contact-button"><?php echo $content['contact_button']; ?></a>
            </div>
        </div>
    </div>


    
<?php get_footer(); ?>