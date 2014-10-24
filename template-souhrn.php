<?php
/*
Template Name: Souhrn
*/

$lidi = array(
	"Bahbouh" => "Kryštof Jirků",
	"Karous" => "Anna Šímová",
	"Lazar" => "Marek Háša",
	"Janda" => "Kuba Končil",
	"Bílek" => "Viktorie Patová",
	"Klusák" => "Viktorie Patová",
	"Kolman" => "Ben Straňák",
	"Gibas" => "Dita Laštovičková",
	"Týmal" => "Vojta Konečný",
	"Tureček" => "Sandra Pečenková",
	"Kovanda" => "Jan Kvíz",
	"Kokolia" => "Jan Kvíz",
	"Kaláb" => "Dan Cohn",
	"Týc" => "Kristýna Risová",
	"Blažíček" => "Vojta Konečný",
	"Pancíř" => "Vojta Konečný",
	"Novák" => "Zuzana Rambousková",
	"Strnad" => "Kačka Fuková",
	"Drahonínský" => "Dita Laštovičková",
	"Tesař" => "Jana Bednářová",
	"Dvořák" => "Karel Jäger",
	"Tomáš Zima" => "Jiří Kučera",
	"Trlifajova" => "Krystof Knapp",
	"Pavlicek" => "Krystof Knapp",
	"Gebrian" => "Diana Čechová",
	"Flégr" => "Hana Hoskovcová",
	"Palouš" => "Kryštof Knapp",
	"Doušek" => "Jirka Balhar",
	"Palečková" => "Marek Háša",
	"Štajerová" => "Dita Laštovičková",
	"Pánek" => "Diskuse 89",
	"Mendel" => "Diskuse islám",
	);

?>
<?php get_header(); ?>

<div class="overlay" style="background-image:url(<?php echo get_template_directory_uri() . "/img/bg3.jpg";?>);">
	<div class="top" style="visibility: hidden;"><a href="<?php echo get_the_permalink(9); ?>"><div class="triangle up"></div></a></div>
	<div class="content">
	<table width="100%" border="1" style="font-size: 14pt;">
		<tr><td>přednášející</td><td>medailonek</td><td>anotace</td><td>organizátor</td></tr>
		<?php
		foreach ($lidi as $prednasejici => $org) {
			// wp_reset_postdata();

			$args = array(
				'post_type' => 'post',
			    'post_title_like' => $prednasejici,
			    'post_status' => array('publish', 'pending', 'draft', 'future', 'private')
			);
			$res = new WP_Query($args);
			echo "<tr>";
			echo "<td>";
			echo $prednasejici;
			echo "</td>";
			// medailonek
			
			if($res->found_posts > 0){
				$res->the_post();
				$status = get_post_status(get_the_id());
				echo "<td style='background-color:".($status=="pending"?"red":($status=="publish"?"green":"transparent")).";'>";
				echo '<a href="'.get_the_permalink().'">' . get_the_title() . '</a> - '.$status;
				echo "</td>";
				$res2 = new WP_Query(array(
					'post_type' => 'post',
					'category_name' => 'anotace',
					'meta_key' => 'prednasejici',
					'meta_value' => get_the_id(),
					'post_status' => array('publish', 'pending', 'draft', 'future', 'private')
				));
				if($res2->found_posts > 0){
					$res2->the_post();
					$status2 = get_post_status(get_the_id());
					echo "<td style='background-color:".($status2=="pending"?"red":($status2=="publish"?"green":"transparent")).";'>";
					echo '<a href="'.get_the_permalink().'">' . get_the_title() . '</a> - '.$status2;
				}
				else {
					echo '<td>-';
				}
			}
			else {
				echo "<td>";
				echo "-</td><td>-";
			}
			echo "</td>";

			echo "<td>";
			echo $org;
			echo "</td>";
			echo "</tr>";
		}
		?>
	</table>

	</div>
	<div class="bottom">
		<?php wp_nav_menu(); ?>
	</div>
</div>

<?php get_footer(); ?>