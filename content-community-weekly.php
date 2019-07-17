
<!-- I AM CUSTOM TEMPLATE community weekly -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="container template-book_container" >
    <div class="row">
        <div class="col">
		        <?php if( has_post_thumbnail() ): ?>

            <div class="col-xs-12 col-sm-4">
                 <div class="thumbnail template-book_post">
                   <?php the_title( sprintf('<h1 class="entry-title container-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            </div>
            

<?php else:?>
i eofkeof
            <div class="col-xs-12">
             <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

            </div>

<?php endif; ?>

           
         </div>
    </div>
</div>

</article>
