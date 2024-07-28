<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minimal-blocks
 */
if ( ! is_active_sidebar( 'shop-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
    <div class="theiaStickySidebar">
		<div class="sidebar-bg">
			<?php dynamic_sidebar( 'shop-sidebar' ); ?>
		</div>
	</div>
</aside><!-- #secondary -->