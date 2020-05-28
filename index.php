<!DOCTYPE html>
<html lang="fr">
<head>
    <link  rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
</head>
<body>
    <main>
        <h1><?php bloginfo('description');?></h1>
            <?php while(have_posts()) : the_post();?>
                <article>
                    <h2><?php the_title();?></h2>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php the_content();?>
                </article>
            <?php endwhile; ?>
    </main>
</body>
</html>