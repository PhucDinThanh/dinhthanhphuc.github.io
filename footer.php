<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimal_Blocks
 */
?>
    </div>
</div>
<?php
if( is_front_page() ) {
    /**
     */
    do_action('minimal_blocks_home_footer_section');
}
?>

<footer id="colophon" class="site-footer">
    <?php if (is_active_sidebar('footer-col-one') || is_active_sidebar('footer-col-two') || is_active_sidebar('footer-col-three')): ?>
        <div class="footer-widget-area">
            <div class="tm-wrapper">
                <div class="row">
                    <?php if (is_active_sidebar('footer-col-one')) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar('footer-col-one'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('footer-col-two')) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar('footer-col-two'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('footer-col-three')) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar('footer-col-three'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="footer-block">
        <div class="row row-collapse">
            <div class="col-lg-6 col-md-12" data-mh="footer-block-item">
                <div class="site-branding">
                    <?php
                    the_custom_logo(); ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                        </h1>

                    <?php $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) : ?>
                        <p class="site-description">
                            <?php echo $description; ?>
                        </p>
                    <?php
                    endif;
                    ?>
                </div>
                <?php if (has_nav_menu('social-nav')) { ?>
                    <div class="navigation-social-icon">
                        <div class="social-icons">
                            <?php
                            wp_nav_menu(
                                array('theme_location' => 'social-nav',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'menu_id' => 'social-menu',
                                    'fallback_cb' => false,
                                    'menu_class' => false
                                )); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-6 col-md-12" data-mh="footer-block-item">
                <?php
                /**
                 *
                 * @hooked minimal_blocks_mailchimp_form - 20
                 */
                do_action('minimal_blocks_mailchimp_footer');
                ?>
            </div>
        </div>
    </div>

    <?php
    $copyright_text = minimal_blocks_get_option('copyright_text', true);
    if ($copyright_text):
    ?>
        <div class="site-copyright">
            <div class="tm-wrapper">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <span><?php echo wp_kses_post($copyright_text);?></span>
                        <?php
                        $enable_footer_credit = minimal_blocks_get_option('enable_footer_credit', true);
                        if ($enable_footer_credit) {
							printf(esc_html__('Theme: %1$s by %2$s', 'minimal-blocks'), '<a href="https://www.thememattic.com/theme/minimal-blocks/" target = "_blank" rel="designer">Minimal Blocks Pro</a>', '<a href="http://thememattic.com/" target = "_blank" rel="designer">Thememattic</a>');
						}
                        ?>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <?php
                        if (has_nav_menu('footer-nav')) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer-nav',
                                'menu_id' => 'footer-menu',
                                'container' => 'div',
                                'container_class' => 'footer-navigation',
                                'depth' => 1,
                            ));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>
</footer>
</div><!--site-content-->


<svg class="svg-hidden" viewBox="0 0 310 160">
    <defs>
        <clippath id="cp_up">
            <polygon id="cp_poly_up" points="0,0 310,0 310,160" />
        </clippath>
        <clippath id="cp_down">
            <polygon id="cp_poly_down" points="0,0 0,160 310,160" />
        </clippath>
    </defs>
</svg>

</div><!--site-->
<a id="scroll-up" class="secondary-background"><i class="ion-ios-arrow-up"></i></a>
<?php wp_footer(); ?>

</body>
</html>
