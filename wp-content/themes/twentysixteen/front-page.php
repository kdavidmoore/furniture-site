<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
	</main>
</div>

<?php stripe_checkout(); ?>

<?php get_footer(); ?>
