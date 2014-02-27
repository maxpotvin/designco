<?php
    // Affichage à l'accueil
    define('WP_USE_THEMES', false);
    require('blogue/wp-blog-header.php');
?>

<?php query_posts('posts_per_page=2'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail');
        }
    ?>
    <?php the_excerpt(); ?>

<?php endwhile; ?>
<?php else : ?>
    <?php _e('Aucun articles correspond à vos critères.'); ?>
<?php endif; ?>

<?php wp_reset_query(); ?>

<a href="blogue/index.php">Lire toutes les actualités</a>