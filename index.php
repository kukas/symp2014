<?php get_header(); ?>


<div class="overlay">
	<div class="left">
		<!-- <ul class="menu">
			<li><a href="#">úvod</a></li>
			<li><a href="#">informace</a></li>
			<li><a href="#">harmonogram</a></li>
			<li><a href="#">medailonky</a></li>
			<li><a href="#">anotace</a></li>
		</ul> -->
		<?php wp_nav_menu(); ?> 
	</div>
	<div class="right">
	<h1>Symposion 2014</h1>

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
</div>

<?php get_footer(); ?>