<?php 
$architect_decor_menu_style = get_theme_mod('designexo_menu_style', 'sticky');   
$architect_decor_menu_container_size = get_theme_mod('designexo_menu_container_size', 'container');
?>
	<!-- Theme Menubar -->
	<nav class="navbar navbar-expand-lg not-sticky navbar-light  <?php if($architect_decor_menu_style == 'sticky'){echo 'header-sticky'; }?>">
		<div class="<?php echo esc_attr($architect_decor_menu_container_size); ?>">
			<div class="row align-self-center">
				
					<div class="align-self-center">	
						<?php designexo_header_logo(); ?>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation','architect-decor'); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					
					<?php 
						wp_nav_menu( array(
							 'theme_location'  => 'primary',
							 'container'       => 'div',
							 'container_class' => 'collapse navbar-collapse',
							 'container_id' => 'navbarNavDropdown',
							 'menu_class'      => 'nav navbar-nav m-right-auto',
							 'fallback_cb'     => 'designexo_bootstrap_navwalker::fallback',
							 'walker'          => new designexo_bootstrap_navwalker()
						) );
					?>
				
			</div>
		</div>
	</nav>
	<!-- /Theme Menubar -->