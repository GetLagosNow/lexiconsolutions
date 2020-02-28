<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<br>

			<div class="info-under-single-listing">

				<p><strong>Lexicon Solutions</strong> is a full-service staffing company specializing in contract, contract-to-hire, direct placement, and payroll services. Located in the Portland metro area, we are at the heart of technology in the Pacific Northwest. Lexicon Solutions has been voted by the Portland Business Journal as one of Portland's Top Staffing Firms from 2009 - 2019.</p>

				<p><strong>Lexicon Solutions</strong> is proud to offer a comprehensive benefits package, including the following:
					<ol>
						<li>Major PPO (Pre-tax) medical/dental cafeteria plan.</li>
						<li>AFLAC supplemental insurance.</li>
						<li>Complementary care.</li>
						<li>Individual supplemental term life policies.</li>
						<li>Paid holidays and PTO.</li>
						<li>Direct deposit payroll option.</li>
					</ol>
				</p>

				<!-- This page has not been created so I am not going to show this -->
				<!-- <p><strong>Lexicon Solutions</strong> offers a generous referral bonus program. For more information, visit our website at: <a href="#">www.lexiconsolutions.com/referralprogram</a></p> -->

	 			<p>To view other <strong>Lexicon Solutions</strong> job opportunities, please visit our website at: <a href="/jobs">www.lexiconsolutions.com/jobs</a></p>

	 		</div>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
