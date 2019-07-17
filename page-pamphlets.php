<?php

/*
	Template Name:page books format
*/

?>
<?php get_header(); ?>

	<div class="container-fluid">
		<div class="row">

			<?php 
			
			$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=books');
				
			if( $lastBlog->have_posts() ):
				
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

				<div class="col-xs-12 col-sm-4">
					
					<?php get_template_part('content-books',get_post_format()); ?>

					</div>
				
				<?php endwhile;
				
			endif;
			
			?>
		
		</div>
			<div class="row">
			
			<div class="col-xs-12 col-sm-8">
			</div>
			
			
	</div>
</div>	

	


<?php get_footer(); ?>