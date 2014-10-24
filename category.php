<?php get_header(); ?>

<div class="overlay" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg2.jpg);">
	<div class="top"><a href="<?php echo get_the_permalink(9); ?>"><div class="triangle up"></div></a></div>
	<div class="content">
		<h1><?php single_cat_title(); ?></h1>
		<?php if ( have_posts() ) : ?>
		<p>
		<?php while ( have_posts() ) : the_post(); ?>
		<article class="post-title">
			<header>
				<h3 class="header">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
			</header>
		</article>

		<?php endwhile; ?>
		</p>
		<?php else: ?>
		<article>
			<p>Připravuje se</p>
		</article>
		

		<?php endif; ?>
	</div>
	<div class="bottom">
		<?php wp_nav_menu(); ?>
	</div>
</div>

<?php get_footer(); ?>