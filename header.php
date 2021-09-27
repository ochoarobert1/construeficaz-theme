<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//facebook.com" crossorigin />
    <link rel="dns-prefetch" href="//connect.facebook.net" crossorigin />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" crossorigin />
    <link rel="dns-prefetch" href="//google-analytics.com" crossorigin />
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#DACCAB" />
    <meta name="theme-color" content="#DACCAB" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <?php wp_body_open(); ?>
    <div id="fb-root"></div>
    <?php $class_home = (is_front_page()) ? 'front-page-header' : ''; ?>
    <header id="headerCnt" class="container-fluid container-header <?php echo $class_home; ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row align-items-center">
            <div class="header-left header-logo col-4">
                <a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                    <?php if (is_front_page()) : ?>
                    <?php $custom_white_logo = get_theme_mod('white_logo'); ?>
                    <?php $custom_logo_id = attachment_url_to_postid($custom_white_logo); ?>
                    <?php else : ?>
                    <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                    <?php endif; ?>
                    <?php $image = wp_get_attachment_image_src($custom_logo_id, 'logo'); ?>
                    <?php if (!empty($image)) { ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                    <?php } ?>
                </a>
            </div>
            <div class="header-center header-button text-center col-4">
                <button id="menuOpener" class="btn-menu" title="<?php _e('Haz click aquí para abrir el menú', 'construeficaz'); ?>"><span></span><span></span></button>
            </div>
            <div class="header-right header-info text-right col-4">
                <?php $header_options = get_option('cte_header_settings'); ?>
                <a href="mailto:<?php echo $header_options['email']; ?>" target="_blank" title="<?php _e('Haz click aquí para enviarnos un correo', 'construeficaz'); ?>"><?php echo $header_options['email']; ?></a>
                <a href="tel:<?php echo formattedTelf($header_options['phone']); ?>" target="_blank" title="<?php _e('Haz click aquí para llamar a nuestro master', 'construeficaz'); ?>"><?php echo $header_options['phone']; ?></a>
                <a href="" target="_blank" title="<?php _e('Haz click aquí para visitar nuestro perfil', 'construeficaz'); ?>"><i class="fa fa-instagram"></i></a>
                <a href="" target="_blank" title="<?php _e('Haz click aquí para visitar nuestro perfil', 'construeficaz'); ?>"><i class="fa fa-instagram"></i></a>
            </div>
        </div>

        <div id="menuCnt" class="header-menu-container d-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="menu-left menu-container col-3">
                        <?php wp_nav_menu(); ?>
                    </div>
                    <div class="menu-center menu-graphs col-6">
                        La Letra
                    </div>
                    <div class="menu-right menu-container col-3">

                    </div>
                </div>
            </div>
        </div>
    </header>