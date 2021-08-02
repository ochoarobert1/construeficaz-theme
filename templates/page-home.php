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
        <div class="home-hero-left-text col-8">
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
                        <?php echo wp_get_attachment_image( $descanso_image_id, 'full', false, array('class' => 'img-fluid')); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>