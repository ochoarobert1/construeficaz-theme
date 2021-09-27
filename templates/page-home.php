<?php
/**
* Template Name: Pagina de Inicio
*
* @package construeficaz
* @subpackage construeficaz-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row row-hero no-gutters">
        <?php $home_bg_id = get_post_meta(get_the_ID(), 'cte_home_hero_image_id', true); ?>
        <?php $home_bg = wp_get_attachment_image_src($home_bg_id, 'full'); ?>
        <section class="home-hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $home_bg[0]; ?>);">
            <div class="container">
                <div class="row">
                    <div class="home-hero-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <div class="home-hero-left-text col-7">
            <div class="home-hero-left-text-wrapper">
                <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'cte_home_hero_subtext', true)); ?>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <section class="home-spacer-container spacer1 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="home-spacer-text col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'cte_home_descanso_text', true)); ?>
                        <?php $button_url = get_post_meta(get_the_ID(), 'cte_home_descanso_btn_link', true); ?>
                        <a class="btn btn-md btn-gray btn-spacer" href="<?php echo $button_url; ?>" title="<?php echo get_post_meta(get_the_ID(), 'cte_home_descanso_btn_text', true); ?>"><?php echo get_post_meta(get_the_ID(), 'cte_home_descanso_btn_text', true); ?></a>
                    </div>
                    <div class="home-spacer-logo col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <?php $descanso_image_id = get_post_meta(get_the_ID(), 'cte_home_descanso_logo_id', true); ?>
                        <?php echo wp_get_attachment_image($descanso_image_id, 'full', false, array('class' => 'img-fluid')); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-services-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="home-services-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="home-services-image-wrapper">
                            <?php $service_image_id = get_post_meta(get_the_ID(), 'cte_home_services_image_id', true); ?>
                            <?php echo wp_get_attachment_image($service_image_id, 'full', false, array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="home-services-text-wrapper">
                            <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'cte_home_services_text', true)); ?>
                            <?php $button_url = get_post_meta(get_the_ID(), 'cte_home_services_btn_link', true); ?>
                            <a class="btn btn-md btn-gray btn-spacer" href="<?php echo $button_url; ?>" title="<?php echo get_post_meta(get_the_ID(), 'cte_home_services_btn_text', true); ?>"><?php echo get_post_meta(get_the_ID(), 'cte_home_services_btn_text', true); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-testimonials-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="home-testimonials-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="swiper swiper-testimonials">
                            <div class="swiper-wrapper">
                                <?php $arg_testimonials = get_post_meta(get_the_ID(), 'cte_home_test_group', true); ?>
                                <?php foreach ($arg_testimonials as $item) { ?>
                                <div class="swiper-slide">
                                    <div class="testimonials-item">
                                        <picture>
                                            <?php echo wp_get_attachment_image($item['icon_id'], 'avatar', false, array('class' => 'img-fluid')); ?>
                                        </picture>
                                        <div class="content">
                                            <div class="star-container">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </div>
                                            <h3><?php echo $item['name']; ?></h3>
                                            <div class="desc">
                                                <?php echo apply_filters('the_content', $item['desc']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-logos-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="home-logos-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="swiper swiper-logos">
                            <div class="swiper-wrapper">
                                <?php $arg_logos = get_post_meta(get_the_ID(), 'cte_home_partners_logos', true); ?>
                                <?php foreach ($arg_logos as $key => $value) { ?>
                                <div class="swiper-slide">
                                    <div class="logos-item">
                                        <picture>
                                            <?php echo wp_get_attachment_image($key, 'medium', false, array('class' => 'img-fluid')); ?>
                                        </picture>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>