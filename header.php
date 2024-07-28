<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimal_Blocks
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
<?php if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>
<?php
$enable_preloader = minimal_blocks_get_option('enable_preloader', true);
$style = 'style="display:none"';
if ($enable_preloader) {
    $style = '';
}
?>
<div class="preloader" <?php echo $style; ?>>
    <ul class="loader-spinner">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'minimal-blocks'); ?></a>

<?php get_template_part( 'components/aside-panel/panel', 'main' ); ?>

<div id="page" class="site">

    <div id="content" class="site-content">
        <?php
        if ( !is_front_page()) {
             /**
             * Hook - minimal_blocks_inner_header.
             *
             * @hooked minimal_blocks_display_inner_header -  10
             */
            do_action('minimal_blocks_inner_header');
        } ?>

        <?php
        if ( is_front_page()) {
            /**
             * Hook - minimal_blocks_banner_slider_section.
             *
             * @hooked minimal_blocks_banner_slider_content -  10
             */
            do_action('minimal_blocks_banner_slider_section');            
            /**
             * Hook - minimal_blocks_carousel_slider_section.
             *
             * @hooked minimal_blocks_carousel_slider_content -  10
             */
            do_action('minimal_blocks_carousel_slider_section');
        } ?>
        <div class="content-wrapper">
            <div class="tm-wrapper">

