<?php

/*
	Template Name: Page body text
*/
?>
<?php get_header(); ?>


<!-- COMMUNCATION TIPS PAGE  -->
<div class="row">
	
	<div class="col-xs-12">
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
								
        <div class="container text-center" id="hero_header">
             <h1 class="display-4 text-align-center"><?php the_title(); ?></h1>
        </div>
    </div>
<div class="col-sm-2">
</div>
    <div class="col-sm-8">
            <p><?php the_content(); ?></p>
	</div>			
    <div class="col-sm-2">
</div>		
				<hr>
			
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
</div>

<?php get_footer(); ?>

