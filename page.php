<?php get_header(); ?>



	<main id="main">
		<div class="wrap">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}
			?>
		</div><!-- .wrap -->
	</main>

<?php get_footer(); ?>
