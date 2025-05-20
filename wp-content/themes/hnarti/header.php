<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Mobile Header (Only visible on small screens) -->
    <header id="mobile-masthead" class="mobile-site-header">
        <div class="mobile-header-container">
            <div class="mobile-site-branding">
                <?php
                if (has_custom_logo()) :
                    the_custom_logo();
                else :
                ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
            </div>

            <div class="mobile-header-actions">
                <div class="mobile-language-selector">
                    <select name="mobile-language" id="mobile-language-select">
                        <option value="en">EN</option>
                        <option value="am">AM</option>
                    </select>
                </div>
                <button class="mobile-menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="mobile-menu-icon"></span>
                    <span class="screen-reader-text"><?php esc_html_e('Menu', 'your-theme-name'); ?></span>
                </button>
            </div>
        </div>

        <div class="mobile-navigation-wrapper">
            <nav id="mobile-navigation" class="mobile-navigation">
                <?php
                // Combine both menus for mobile
                $mobile_menu_args = array(
                    'theme_location' => 'header-left',
                    'menu_class'     => 'mobile-nav-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'fallback_cb'    => false,
                );

                // First try to use a specific mobile menu if set
                if (has_nav_menu('mobile-menu')) {
                    $mobile_menu_args['theme_location'] = 'mobile-menu';
                    wp_nav_menu($mobile_menu_args);
                } else {
                    // Otherwise use the left menu
                    wp_nav_menu($mobile_menu_args);

                    // And append the right menu items
                    if (has_nav_menu('header-right')) {
                        $right_menu_items = wp_nav_menu(
                            array(
                                'theme_location' => 'header-right',
                                'echo'           => false,
                                'fallback_cb'    => false,
                                'container'      => false,
                                'items_wrap'     => '%3$s',
                            )
                        );

                        if ($right_menu_items) {
                            echo '<ul class="mobile-nav-menu right-items">' . $right_menu_items . '</ul>';
                        }
                    }
                }
                ?>
            </nav>
        </div>
    </header>

    <!-- Desktop Header (Original, only visible on larger screens) -->
    <header id="masthead" class="site-header">
        <div class="header-container">
            <nav id="left-navigation" class="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-left',
                        'menu_class'     => 'nav-menu left-menu',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    )
                );
                ?>
            </nav>

            <div class="site-branding">
                <?php
                if (has_custom_logo()) :
                    the_custom_logo();
                else :
                ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
            </div>

            <nav id="right-navigation" class="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-right',
                        'menu_class'     => 'nav-menu right-menu',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    )
                );
                ?>
                <div class="header-actions">
                    <!-- <a href="#" class="search-toggle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-search-icon.png" alt="Search">
                </a> -->
                    <div class="language-selector">
                        <select name="language" id="language-select">
                            <option value="en">EN</option>
                            <option value="am">AM</option>
                        </select>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div id="content" class="site-content">

        <?php
        // Add mobile menu toggle JavaScript at the bottom of the file
        add_action('wp_footer', function () {
        ?>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
                    const mobileNavigationWrapper = document.querySelector('.mobile-navigation-wrapper');

                    if (mobileMenuToggle && mobileNavigationWrapper) {
                        mobileMenuToggle.addEventListener('click', function() {
                            mobileNavigationWrapper.classList.toggle('toggled');
                            mobileMenuToggle.classList.toggle('toggled');

                            if (mobileMenuToggle.getAttribute('aria-expanded') === 'false') {
                                mobileMenuToggle.setAttribute('aria-expanded', 'true');
                            } else {
                                mobileMenuToggle.setAttribute('aria-expanded', 'false');
                            }
                        });
                    }

                    // Sync language selectors
                    const desktopLanguageSelect = document.getElementById('language-select');
                    const mobileLanguageSelect = document.getElementById('mobile-language-select');

                    if (desktopLanguageSelect && mobileLanguageSelect) {
                        // Sync initial state
                        mobileLanguageSelect.value = desktopLanguageSelect.value;

                        // Keep them in sync when changed
                        desktopLanguageSelect.addEventListener('change', function() {
                            mobileLanguageSelect.value = desktopLanguageSelect.value;
                        });

                        mobileLanguageSelect.addEventListener('change', function() {
                            desktopLanguageSelect.value = mobileLanguageSelect.value;
                        });
                    }
                });
            </script>
        <?php
        });
        ?>