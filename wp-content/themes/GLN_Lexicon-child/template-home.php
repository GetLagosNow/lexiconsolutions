<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="container-fluid">

					<div class="row" id="home-row-1">

						<div class="col-md-6" id="home-row-1-left">

						</div>

						<div class="col-md-6" id="home-row-1-right">

							<h1>Experience <span>at work</span></h1>

							<div id="home-row-1-right-text">

								<p>Portland’s leading tech recruiting agency that’s always fulfilling their mission -To always do what’s best for the candidates and clients.</p>

							</div>
							<div id="home-row-1-right-btns">
								<a class="btn" href="#" role="button">Find Work</a>
								<a class="btn" href="#" role="button">Find Talent</a>
							</div>

						</div>

					</div>


						
					<div class="row" id="home-row-2-title">

						<div class="col-xs-12">
							
							<h1>We are the <span>solution</span></h1>

							<p>At Lexicon Solutions we Think Local.<br>We work for our community while putting our community to work.</p>

						</div>
					
					</div>

					<div class="row" id="home-row-2">

						<div class="col-md-5" id="home-row-2-left">

						</div>

						<div class="col-md-7" id="home-row-2-right">

							<div id="home-row-2-right-text">
								
								<h1>Experience <span>at work</span></h1>

								<p>Portland’s leading tech recruiting agency that’s always fulfilling their mission -To always do what’s best for the candidates and clients.</p>

							</div>

						</div>

					</div>



				</div>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
