<!-- Header -->
<?php
	get_header();
?>
<!-- End Header -->
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