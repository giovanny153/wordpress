<?php
/**
 * Main Navigation
 *
 * @package Donovan
 */

// Check if there is a social menu.
if ( has_nav_menu( 'social' ) ) : ?>

	<div id="header-social-icons" class="header-social-menu donovan-social-menu clearfix">

		<?php
		// Display Social Icons Menu.
		wp_nav_menu( array(
			'theme_location' => 'social',
			'container' => false,
			'menu_class' => 'social-icons-menu',
			'echo' => true,
			'fallback_cb' => '',
			'link_before' => '<span class="screen-reader-text">',
			'link_after' => '</span>',
			'depth' => 1,
			)
		);
		?>

	</div>

<?php endif;
