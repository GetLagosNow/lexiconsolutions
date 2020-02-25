<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="container-fluid">

					<div class="row" id="home-section-1">

						<div class="col-md-6" id="home-section-1-left">

						</div>

						<div class="col-md-6" id="home-section-1-right">

							<h1>Experience <span>at work</span></h1>

							<div id="home-section-1-right-text">

								<p>We are a boutique IT & Engineering Recruiting Agency based in Portland, OR. At Lexicon Solutions, our mission is simple: to always do what’s best for our candidates and clients.</p>

							</div>
							<div id="home-section-1-right-btns">
								<a class="btn" href="/jobs" role="button">Current Job Openings</a>
								
								<!-- 2 buttons
								<a class="btn" href="/job-seekers" role="button">Find Work</a>
								<a class="btn" href="/find-talent" role="button">Find Talent</a> -->
							</div>

						</div>

					</div>


						
					<div class="row" id="home-section-2-title">

						<div class="col-xs-12">
							
							<h1>We are the <span>solution</span></h1>

							<p>At Lexicon Solutions we <strong>Think Local</strong>. We work for our community while putting our community to work.</p>

						</div>
					
					</div>

					<div class="row" id="home-section-2">

						<div class="col-md-5" id="home-section-2-left">

						</div>

						<div class="col-md-7" id="home-section-2-right">

							<div id="home-section-2-right-text">
								
								<!-- <h3>Job Opportunities</h3>

								<p>Making your success a priority</p> -->

								<h3>Direct-Hire Recruitment</h3>

								<p>Grow your business confidently</p>

								<h3>Contract Staffing</h3>

								<p>Strategically staff within budget</p>

								<h3>Payroll Services</h3>

								<p>Payrolling, insurance, benefits</p>

							</div>

						</div>

					</div>

					<div class="row" id="home-section-3">
					
						<div class="col-md-5" id="home-section-3-left">						
							<h2>Seeking Job  Opportunities</h2>
							<!-- <p>Check out the opportunities that are looking to meet the right talent.</p> -->
							<a href="/jobs-seekers">
								<h3>find work</h3>
							</a>
						</div>
								
						<div class="col-md-5" id="home-section-3-right">
							<h2>Finding the Right One</h2>
							<!-- <p>We guarantee that partnering with us will strategically be a win.</p> -->
							<a href="/find-talent">
								<h3>learn more</h3>
							</a>
						</div>
						

						<div class="col-md-2" id="home-section-3-logo">

						</div> 

					</div>

					<div class="home-section-3-img">

						<div id="home-section-3-img">

						</div>

					</div>

					<div class="home-section-4">

						<div id="home-section-4">
							<h2>Job Alerts</h2>
							<p>Subscribe to our custom job alerts! Stay informed on the latest jobs in your industry. You’ll be sent an email with new jobs that match your criteria regularly.</p>
							<a href="/job-alerts"><h3>JOIN TODAY</h3></a>
						</div>

					</div>

					<div id="home-section-4-media">
						<?php echo do_shortcode('[sp_wpcarousel id="425"]'); ?>					

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
