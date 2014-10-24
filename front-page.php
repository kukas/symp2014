<?php get_header(); ?>
<script>
$(function(){
	var w = $(".content").width();
	var h = $(".content").height();
	// $(".title").css("top", (h-$(".title").height())/2+"px");
	// $(".title").css("left", (w-$(".title").width())/2+"px");
	// $(".poster").css("margin-top", ((h-$(".poster").height())/2-$(".poster").offset().top)+"px");
});

</script>
<div class="overlay">
	<div class="content">
		<header class="poster">
		<a href="<?php echo get_permalink(9); ?>" class="title">
			<img src="<?php echo get_template_directory_uri(); ?>/img/title-small.png">
		</a>
		</header>
	</div>
	<!-- <div class="bottom">
		<a href="#" class="slide-down-button"><div class="triangle down"></div></a>
	</div> -->
</div>
<!-- 
<div class="overlay hidden">
	<div class="content">
	</div>
	<div class="bottom">
		<a href="#" class="slide-down-button"><div class="triangle down"></div></a>
	</div>
</div> -->

<?php get_footer(); ?>