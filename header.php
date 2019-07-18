<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Deaf Aotearoa</title>
		<?php wp_head(); ?>
	</head>
	
	<div class="container-fluid header-container">
		<div class="row">
			<div class="col-xs-10 col-sm-10">
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</div>
			<!-- <div class="container-fluid"> -->
			<div class="col-xs-2 col-sm-2">
			<a href="/DeafNZ/product/donation/"><button id='donate'>DONATE</button></a>
			</div>
			</div>
			
		</div>
	</div>
	
	
	<div class="row">		
		
		<div class="container envy">
			<div class="col-xs-12">
					<nav class="navbar" id="test-nav">		
					
								<?php
									wp_nav_menu( array(
										'theme_location'    => 'primary',
										'depth'             => 3,
										'container'         => 'div ',
										'container_class'   => 'navbar-header ',
										'container_id'      => 'bs-example-navbar-collapse-1',
										'menu_class'        => 'nav navbar-nav ',
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'walker'            => new WP_Bootstrap_Navwalker(),
									) );
									?>
						
					</nav>	
					<?php get_sidebar(); ?>

					</div>
			
				</div>	
											
		</div> 


	
	




