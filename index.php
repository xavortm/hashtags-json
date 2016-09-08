<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/app.css">
	<title>Hashtag Selector</title>
</head>
<body>
	<?php
		// The basic php stuff :)
		$str = file_get_contents('hashtags.json');
		$json = json_decode($str, true);
	?>

	<div class="row" style="margin-top: 100px">
		<div class="column small-12">
			
			<h3>DevriX hashtag list:</h3>
			
			<div class="input-group">
				<span class="input-group-label amount">0</span>
				<input class="shortcodes-output input-group-field" type="text" placeholder="Copypaste these shortcodes">
				<div class="input-group-button">
					<input type="submit" class="button success copy" value="Copy">
				</div>
			</div>

			<div class="categories">
				<fieldset>
					<?php
						// echo "<legend>Select categories to pick hashtags from</legend>";
						// $i = 0;
						// foreach($json['hashtags'] as $category) {
						// 	echo "<input id='checkbox{$i}' type='checkbox'><label for='checkbox{$i}'>{$category[$i]}</label>";
						// 	$i++;
						// }
					?>
					<br />
					<?php
					foreach($json['hashtags'] as $category) {
						$item_counter = 0;
						echo "<strong>$category[0]</strong>";
						echo "<div class='button-group'>";
						foreach($category as $item) {
							echo "<span class='button' data-category='$category[$item_counter]'>$category[$item_counter]</span>";
							$item_counter++;
						}
						echo "</div>";
					}
				?>
				</fieldset>
			</div><!-- .categories -->
		</div><!-- .column -->
	</div><!-- .row -->

	<div class="row">
		<div class="column small-12">
			<div class="hashtags-input">
				
			</div><!-- .hashtags-input -->
		</div><!-- .column -->
	</div><!-- .row -->

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/app.js"></script>
	<script src="scripts.js"></script>
</body>
</html>
