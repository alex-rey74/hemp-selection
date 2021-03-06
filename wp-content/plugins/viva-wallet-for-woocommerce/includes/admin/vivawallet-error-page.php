<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

$current_currency = get_woocommerce_currency();
/* translators: error */
$error_message_one = sprintf( __( 'Current currency %s selected for WooCommerce is not supported by Viva Wallet.', 'viva-wallet-for-woocommerce' ), $current_currency );
$error_message_two = __( 'Merchants can use one of these currencies (EUR, GBP, BGN, PLN, RON, DKK, CZK) which should be the same as their Viva Wallet account currency.', 'viva-wallet-for-woocommerce' );

return apply_filters(
	'wc_vivawallet_settings',
	array(
		'error_one' => array(
			'title'       => __( 'Invalid currency', 'viva-wallet-for-woocommerce' ),
			'type'        => 'title',
			'description' => $error_message_one,
		),
		'error_two' => array(
			'title'       => __( 'Allowed currencies', 'viva-wallet-for-woocommerce' ),
			'type'        => 'title',
			'description' => $error_message_two,
		),
	)
);
