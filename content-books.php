<!-- This is the content-books format page- linked to page-pamphelts -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="container template-book_container">
    
    <div class="row">
        <div class="col">
		        <?php if( has_post_thumbnail() ): ?>

            <div class="col-xs-12 col-sm-4">
                 <div class="thumbnail template-book_post">
                     <?php the_title( sprintf('<h1 class="entry-title container-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
                  <div class="post-temp"><?php the_post_thumbnail('medium'); ?></div>
            </div>
            <div class="col-xs-12">
                <?php the_content();?>
            </div>

<?php else:?>

            <div class="col-xs-12">
                <?php the_content(); ?>
                <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
            </div>

<?php endif; ?>

         </div>
    </div>



</div>

</article>