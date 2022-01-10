<!-- Header -->
<?php
	get_header();
?>
<!-- End Header -->

<!-- Video -->
<video muted="" autoplay="" loop="" preload="auto" class="home-video"
	poster="https://richardcolombel.com/wp-content/uploads/2022/01/47e97d795c77954f667868de116059f3.jpg">
	<source src="https://richardcolombel.com/wp-content/uploads/2022/01/targye-home.mp4" type="video/webm">
	<source src="https://richardcolombel.com/wp-content/uploads/2022/01/targye-home.mp4" type="video/mp4">
	<source src="https://richardcolombel.com/wp-content/uploads/2022/01/targye-home.mp4" type="video/ogg">
</video>
<div class="video-overlay"></div>
<!-- End Video -->

	<div class="content-wrapper">
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>

<!-- Footer -->
<?php
	get_footer();
?>
<!-- End Footer -->