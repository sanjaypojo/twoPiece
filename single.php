<?php get_header(); ?>

	<section id="sidebar-single">
		<div id="main-logo">
			<a href="<?php echo home_url(); ?>">
				<div id="T-container">T</div>
			</a>
		</div>
	</section>

	<!-- The Loop begins-->
	<section id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="post-container">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('medium',array('class' => 'homepage-post-thumbnail'));
					}
				?>
				<div class="post-title">
					<h2><?php the_title(); ?></h2>
					<p class="post-date"><?php the_date(); ?></p>
				</div>
				<div class="post-content">
					<?php echo get_the_content(); ?>
				</div>
			</div>
		<!-- The Loop ends-->
		<?php endwhile; ?>

		<?php else: ?>
			<p id="posts-missing"><?php _e("Uh oh! The post you are looking for seems to have gone into hiding. Apologies, my friend."); ?></p>
		<?php endif; ?>
	</section>

<?php get_footer(); ?>