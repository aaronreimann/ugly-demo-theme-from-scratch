<?php get_header(); ?>

	<div class="row">

		<div class="columns small-12 large-8">

			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					the_title();
					the_content();
				}
			}
			?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>