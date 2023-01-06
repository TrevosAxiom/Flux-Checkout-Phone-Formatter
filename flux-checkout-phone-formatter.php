<?php
/*
 * Plugin Name: Flux Checkout Phone Formatter
 * Description: Formats the phone number field in the Flux Checkout plugin for WooCommerce using the international dialing format.
 * Version: 1.0.0
 * Author: Adebayo Taofik
 * Author URI: https://twitter.com/ooshanla
 * License: GPL2
 */

function flux_checkout_phone_formatter_scripts() {
  if ( is_checkout() ) {
    wp_enqueue_script('intl-tel-input', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js', array(), '16.0.8', true);
    wp_enqueue_style('intl-tel-input', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css');
    wp_add_inline_script('intl-tel-input', 'var input = document.querySelector("#billing_phone"); window.intlTelInput(input, { allowDropdown: true, initialCountry: "auto", separateDialCode: true });');
  }
}
add_action('wp_enqueue_scripts', 'flux_checkout_phone_formatter_scripts');
