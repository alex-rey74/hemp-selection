<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
Plugin Name: WP SMTP
Description: WP SMTP can help us to send emails via SMTP instead of the PHP mail() function and email logger built-in.
Version: 1.2.2
Author: Yehuda Hassine
Text Domain: wp-smtp
Domain Path: /lang
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*
 * The plugin was originally created by BoLiQuan
 */

define( 'WPSMTP__FILE__', __FILE__ );
define( 'WPSMTP_PLUGIN_BASE', plugin_basename( WPSMTP__FILE__ ) );
define( 'WPSMTP_PATH', plugin_dir_path( WPSMTP__FILE__ ) );
define( 'WPSMTP_URL', plugins_url( '/', WPSMTP__FILE__ ) );
define( 'WPSMTP_ASSETS_PATH', WPSMTP_PATH . 'assets/' );
define( 'WPSMTP_ASSETS_URL', WPSMTP_URL . 'assets/' );

require_once 'vendor/autoload.php';

class WP_SMTP {

	private $wsOptions;

	public function __construct() {
		$this->setup_vars();
		$this->hooks();
	}

	public function setup_vars(){
		$this->wsOptions = get_option( 'wp_smtp_options' );
	}

	public function hooks() {
		register_activation_hook( __FILE__ , array( $this,'wp_smtp_activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'wp_smtp_deactivate' ) );

		add_filter( 'plugin_action_links', array( $this, 'wp_smtp_settings_link' ), 10, 2 );
		add_action( 'init', array( $this,'load_textdomain' ) );
		add_action( 'phpmailer_init', array( $this,'wp_smtp' ) );

		new WPSMTP\Admin();
		new WPSMTP\Process();
	}

	function wp_smtp_activate(){
		$wsOptions = array();
		$wsOptions["from"] = "";
		$wsOptions["fromname"] = "";
		$wsOptions["host"] = "";
		$wsOptions["smtpsecure"] = "";
		$wsOptions["port"] = "";
		$wsOptions["smtpauth"] = "yes";
		$wsOptions["username"] = "";
		$wsOptions["password"] = "";
		$wsOptions["deactivate"] = "";

		add_option( 'wp_smtp_options', $wsOptions );

		\WPSMTP\Table::install();

	}

	function wp_smtp_deactivate() {
		if( $this->wsOptions['deactivate'] == 'yes' ) {
			delete_option( 'wp_smtp_options' );
		}
	}

	function load_textdomain() {
		load_plugin_textdomain( 'wp-smtp', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );
	}

	function wp_smtp( $phpmailer ) {

		if( ! is_email($this->wsOptions["from"] ) || empty( $this->wsOptions["host"] ) ) {
			return;
		}

		$phpmailer->Mailer = "smtp";
		$phpmailer->From = $this->wsOptions["from"];
		$phpmailer->FromName = $this->wsOptions["fromname"];
		$phpmailer->Sender = $phpmailer->From;
		$phpmailer->AddReplyTo($phpmailer->From,$phpmailer->FromName);
		$phpmailer->Host = $this->wsOptions["host"];
		$phpmailer->SMTPSecure = $this->wsOptions["smtpsecure"];
		$phpmailer->Port = $this->wsOptions["port"];
		$phpmailer->SMTPAuth = ($this->wsOptions["smtpauth"]=="yes") ? TRUE : FALSE;

		if( $phpmailer->SMTPAuth ){
			$phpmailer->Username = $this->wsOptions["username"];
			$phpmailer->Password = $this->wsOptions["password"];
		}
	}

	function wp_smtp_settings_link($action_links,$plugin_file) {
		if( $plugin_file == plugin_basename( __FILE__ ) ) {

			$ws_settings_link = '<a href="admin.php?page=wpsmtp_logs">' . __("Logs") . '</a>';
			array_unshift($action_links,$ws_settings_link);

			$ws_settings_link = '<a href="admin.php?page=' . dirname( plugin_basename(__FILE__) ) . '/wp-smtp.php">' . __("Settings") . '</a>';
			array_unshift($action_links,$ws_settings_link);
		}

		return $action_links;
	}

}

new WP_SMTP();
?>
