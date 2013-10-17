<?php get_header(); ?>

	<section id="title">
		<div id="main-logo">
			<a href="<?php echo home_url(); ?>">
				<div id="T-container">T</div>
			</a>
		</div>
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h3><?php bloginfo('description'); ?> </h3>
	</section>

	<!-- The Loop begins-->
	<section id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="excerpt-container">
				<a href="<?php echo get_post_permalink(); ?>">
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('medium',array('class' => 'homepage-post-thumbnail'));
						}
					?>
					<div class="excerpt-title">
						<h2><?php the_title(); ?></h2>
						<p class="post-date"><?php the_date(); ?></p>
					</div>
					<div class="excerpt-content">
						<?php echo get_the_excerpt(); ?>
					</div>
				</a>
			</div>
		<!-- The Loop ends-->
		<?php endwhile; ?>

		<?php else: ?>
			<p id="posts-missing"><?php _e("Uh oh! The post you are looking for seems to have gone into hiding. Apologies, my friend."); ?></p>
		<?php endif; ?>

<?php get_footer(); ?>