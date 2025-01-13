<?php
get_header();
?>
<?php 
    if ( have_posts() ): 
        // Load posts loop
        while ( have_posts() ): the_post();
            ?>

                    <div><?php the_content(); ?></div>

            <?php
        endwhile;
    else:
?>
<p>Nothing to display.</p>
<?php endif; ?>