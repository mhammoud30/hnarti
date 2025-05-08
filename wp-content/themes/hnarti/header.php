<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

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
            if ( has_custom_logo() ) :
                the_custom_logo();
            else :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
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