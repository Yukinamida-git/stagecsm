
<?php get_header(); ?>
    <?php while( have_posts() ) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>  
        </article>
    <?php endwhile; ?>
<?php get_footer(); ?>

<?php get_header(); ?>
        <h1>Mes articles</h1>
        <?php while(have_posts()) : the_post(); ?>
        <article>
            <?php the_post_thumbnail('medium'); ?>
            <a title="Voir l'article" href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <?php the_excerpt(); ?>  
        </article>
        <?php endwhile; ?>
<?php get_footer(); ?>



<!doctype html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
        <meta charset="utf-8">
        <title><?php bloginfo('name') ?></title>
    </head>
    <body>
        <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>


<?php get_header(); ?>
        <h1>Mes articles</h1>
        <?php while(have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
<?php get_footer(); ?>

<?php
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );


add_theme_support('post-thumbnails');


