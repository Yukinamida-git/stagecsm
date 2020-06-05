<?php get_header(); ?>



	<main id="main">
		<div class="wrap posts-list">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'exerpt' );
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
