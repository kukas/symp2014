<?php get_header(); ?>

<div class="overlay">
	<div class="top" style="display: none;"><a href="#">back</a></div>
	<div class="content">
		<?php // http://codex.wordpress.org/The_Loop ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="post">
			<header>
				<h3 class="header">
					<?php the_title(); ?>
				</h3>
			</header>
			<?php the_content(); ?>
		</article>

		<?php endwhile; else: ?>
		<h3>Chyba 404</h3>
		<p>Nebyly nalezeny žádné příspěvky</p>

		<?php endif; ?>
	</div>
	<div class="bottom">
		<?php wp_nav_menu(); ?>
	</div>
</div>

<?php get_footer(); ?>