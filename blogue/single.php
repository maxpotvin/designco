<?php
    // Article unique
    // Fonction pour enlever les images attachés à l'article
    function remove_images( $content ) {
       $postOutput = preg_replace('/<img[^>]+./','', $content);
       return $postOutput;
    }
    add_filter( 'the_content', 'remove_images', 100 );
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
<?php endwhile; else: ?>
    <p><?php _e('Aucun articles correspond à vos critères.'); ?></p>
<?php endif; ?>

<?php
    // Gallerie des images attachés. Tailles possibles (thumbnail, medium, large, full
    // Gestion -> /public_html/wordpress/wp-admin/options-media.php
    afficher_gallerie('thumbnail');
?>

<?php
    // Fonction pour rétablir les images attachés à l'article
    remove_filter( 'the_content', 'remove_images' );
?>