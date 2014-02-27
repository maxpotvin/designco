<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail');
        }
    ?>
    <?php the_excerpt(); ?>
 <?php endwhile; ?>
    <?php posts_nav_link(' | ','Précédent','Suivant'); ?>
<?php else : ?>
    <p><?php _e('Aucun articles correspond à vos critères.'); ?></p>
<?php endif; ?>