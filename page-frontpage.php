<?php

/*
	Template Name:page front page
*/
?>
	
<?php get_header(); ?>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
          
            
                <div class="row">

               <div class="col-sm-3"></div>  

                    <div class="col-sm-3">
                        <div class="container-fluid" id="about_video">
                            <?php the_content(); ?>
                        </div>
                    </div>
        
                    

			<hr>
		
		<?php endwhile;
		
	endif; ?>
        

<?php get_footer(); ?>