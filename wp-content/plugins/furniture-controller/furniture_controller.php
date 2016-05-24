<?php
/**
 * Plugin Name: Furniture Controller
 * Plugin URI: http://kdavidmoore.com
 * Description: This plugin controls the furniture content.
 * Version: 1.0.0
 * Author: Keith Moore
 * Author URI: http://kdavidmoore.com
 * License: GPL2
 */

function stripe_checkout(){
	require_once('inc/config.php');

	$stripe_form = '<form action="wp-content/plugins/furniture-controller/inc/charge.php" method="post">
		<input type="text" placeholder="Amount to pay" name="amount">
		<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="'.$stripe['publishable_key'].'"
		  data-description="Access for a year"
          data-amount="" data-locale="auto"></script></form>';

	print $stripe_form;
}
