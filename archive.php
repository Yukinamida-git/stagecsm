<?php get_header(); ?>

	<header id="page-header">
		<div class="wrap">
			<?php the_archive_title( '<h2 class="title">', '</h2>' ); ?>
			<?php the_archive_description( '<div class="subtitle"><p>', '</p></div>' ); ?>
		</div>
	</header>

	<main id="main">
		<div class="wrap posts-list">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content' );
				}
				get_template_part( 'template-parts/pagination' );

			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			?>
		</div><!-- .wrap -->
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
