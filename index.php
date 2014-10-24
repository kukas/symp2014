<?php get_header(); ?>

<div class="overlay" style="background-image:url(<?php
$page_object = get_queried_object();
$page_id     = get_queried_object_id();
if ( $page_id == 9 ) {
	echo get_template_directory_uri() . "/img/bg3.jpg";
}
else {
	echo get_template_directory_uri() . "/img/bg2.jpg";
}
?>);">
	<div class="top" style="visibility: <?php
$page_object = get_queried_object();
$page_id     = get_queried_object_id();
if ($page_id != 9) {
	echo "visible";
}
else {
	echo "hidden";
}
?>;"><a href="<?php echo get_the_permalink(9); ?>"><div class="triangle up"></div></a></div>
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