<?php get_header(); ?>
<script>
$(function(){
	var h = $(".content").height();
	$(".poster").css("margin-top", ((h-$(".poster").height())/2-$(".poster").offset().top)+"px");
	
	$(".poster .invert").each(function(){
		var $this = $(this);
		var text = $this.text().toUpperCase();
		var canvas = document.createElement("canvas");
		canvas.width = $this.width();
		canvas.height = $this.height();
		var ctx = canvas.getContext("2d");
		// $this.html("");
		// $this.append(canvas);

		ctx.fillStyle = $this.css("background-color");
		ctx.fillRect(0,0,$this.width(), $this.height());
		// $this.css("background-color", "transparent");

		// Punch out the text!
		
		// Trick from http://stackoverflow.com/questions/2635814/
		var image = new Image();
		image.src = "ahoj";
		image.onerror = function() {
			ctx.font = $this.css("font");
			canvas.width = ctx.measureText(text).width;
			console.log(canvas.width, ctx.measureText(text).width);
			ctx.fillStyle = $this.css("background-color");
			ctx.fillRect(0,0, $this.width(), $this.height());
			ctx.globalCompositeOperation = 'destination-out'; 
			ctx.fillText(text, 0, $this.height()-1);
		};
	});
});

</script>
<div class="overlay">
	<div class="content">
		<header class="poster slide-down-button">
			<h1><span class="invert">Symposion</span>
			<div class="plevel"><span class="invert">Plevel</span></div></h1>
			<div class="podnadpis">Planá rostlina rychle a nahodile<br>
			se množící vedle pěstovaných</div>
			<div class="misto"><span class="invert">Gymnázium Jana Keplera</span></div>
			<div class="web"><span class="invert">symposion.gjk.cz</span></div>
			<div class="datum"><span class="invert">15-17/11/2014</span></div>
		</header>
	</div>
	<div class="bottom">
		<a href="#" class="slide-down-button"><div class="triangle down"></div></a>
	</div>
</div>

<div class="overlay hidden">
	<div class="content">
	</div>
	<div class="bottom">
		<a href="#" class="slide-down-button"><div class="triangle down"></div></a>
	</div>
</div>

<?php get_footer(); ?>