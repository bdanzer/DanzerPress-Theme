<?php

	function add_drawer_to_footer() {
		$navigation_layout = get_field('navigation_style', 'options');
		$siteColor = get_field('theme_color', 'options');
		$menuBackground = get_field('menu_background', 'options'); 
		$menuColor = get_field('menu_color', 'options')?>
		
		<style type="text/css">
			<?php if ($siteColor) { ?>

				a,
				ul#primary-menu li.current-menu-item a,
				blockquote:before {
					color: <?php echo $siteColor; ?>;
				}
				.danzerpress-button-modern, 
				.form-row input.woocommerce-Button.button, 
				input[type="button"], 
				input[type="reset"], 
				input[type="submit"],
				.cat-links a {
					background: <?php echo $siteColor; ?>;
				}
				.danzerpress-button-modern, 
				.form-row input.woocommerce-Button.button, 
				input[type="button"], 
				input[type="reset"], 
				input[type="submit"],
				ul#primary-menu li:hover {
				    border-color: <?php echo $siteColor; ?>;
				}

			<?php } ?>

			<?php if ($menuBackground && $navigation_layout != 'transparent') { ?>

				/*Change Navigation color*/
				header.drawer-navbar {
					background: <?php echo $menuBackground; ?>;
				}
				
			<?php } else { ?>
				header.danzerpress-non-trans {
					background: <?php echo $menuBackground; ?>;
				}
			<?php } ?>

			<?php if ($menuColor && $navigation_layout != 'transparent') { ?>
				
			<?php } else { ?>
				.danzerpress-non-trans ul#primary-menu li a {
					color: <?php echo $menuColor; ?>;
				}
			<?php } ?>
			
			
		</style>
	
	<?php 
	}
	add_action('wp_footer', 'add_drawer_to_footer');
