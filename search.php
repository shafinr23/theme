<?php
get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		

			<header class="page-header">
				<h1 class="page-title">
					<?php
				
					printf( esc_html__( 'Search Results for: %s', 'theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

			<?php
			/* Starting the Loop */
			while ( have_posts() ) :
				the_post();


				the_content();

			endwhile;

			the_posts_navigation();

		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
