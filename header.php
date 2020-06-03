<!DOCTYPE html>
<html lang="fr">
<head>
    <link  rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
</head>
<body>
    <header>
    <?php if( has_custom_logo() ) {
        the_custom_logo();
    } else { ?>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>    
<?php } ?>

    <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
</header>

