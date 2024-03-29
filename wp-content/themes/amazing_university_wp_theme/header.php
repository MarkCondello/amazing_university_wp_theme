<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" >
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- sets the responsive screen size for all devices -->
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left"><a href="<?= site_url(); ?>"><strong>Fictional</strong> University</a></h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                <?php wp_nav_menu(['theme_location' => 'headerMenuLocation']); ?>
                </nav>
                <div class="site-header__util">
        <?php   if(is_user_logged_in()): ?>
                    <a href="<?= esc_url(site_url('/my-notes')) ?>" class="btn btn--small btn--orange float-left push-right">My Notes</a>
                    <a href="<?= wp_logout_url(); ?>" class="btn btn--with-photo btn--small btn--dark-orange float-left">
                    <span class="site-header__avatar"><?= get_avatar(get_current_user_id(), 60); ?></span>
                    <span class="btn__text">Logout <?= wp_get_current_user()->user_login ?></span></a>
        <?php   else: ?>
                    <a href="<?= wp_login_url() ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="<?= wp_registration_url() ?>" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
        <?php   endif; ?>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>
