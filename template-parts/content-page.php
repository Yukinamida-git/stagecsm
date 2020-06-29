
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
				<div class="entry-content">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('medium');
					}
					the_content();
					?>
				</div>

				<footer>
					<?php wp_link_pages(); ?>
				</footer>
			</article>
