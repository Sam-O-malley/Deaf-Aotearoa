<?php

/*
	Template Name: News commUnity
*/

?>
<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">

            <?php 
            
             $args = array(
                 'type' => 'post',
                 'category__in' => array(4),
             );
			
			$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=commUnity Weekly');
				
			if( $lastBlog->have_posts() ):
				
				while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

				<div class="col-xs-12 col-sm-4">
					
					<?php get_template_part('content-community-weekly',get_post_format()); ?>

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

