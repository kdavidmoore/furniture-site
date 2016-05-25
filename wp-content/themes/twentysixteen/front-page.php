<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="stripe-wrapper">
			<?php stripe_checkout(); ?>
		</div>
		<div class="slider-wrapper">
			<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
		</div>
	</main>
</div>

<?php get_footer(); ?>
