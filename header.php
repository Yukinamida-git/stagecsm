<!DOCTYPE html>
<html lang="fr">
<head>
    <link  rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
</head>
<body>
    <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
