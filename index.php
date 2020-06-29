<?php get_header(); ?>



	<main id="main">
		<div class="wrap posts-list">
			<h1>Bienvenue</h1>
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

<?php get_footer(); ?>
