<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
		wp_head();
	?>

</head>
<body>
	<!-- Sidebar -->
	<div class="sidebar">
		<div class="title"><?php echo get_bloginfo("name") ?></div>

		<!-- Load Menu -->
		<?php
			wp_nav_menu(
				array(
					"menu" => "primary",
					"container" => "",
					"theme_location" => "primary",
					"items_wrap" => '<ul id="" class="main-menu">%3$s</ul>'
				)
			);
		?>
		<!-- End Load Menu -->
		
		<div class="copyright">
			<div>richardcolombel.com © 2022</div>
			<div>Built by <a href="http://www.arkalysapps.com" target="_blank">Arkalys</a></div>
		</div>
	</div>
	<!-- End Sidebar -->