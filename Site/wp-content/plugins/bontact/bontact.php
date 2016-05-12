<?php
/*
Plugin Name: Bontact Widget- Live contact form with chat, phone, text and email
Plugin URI: http://wordpress.org/plugins/bontact/
Description: Engage visitors with a multi-channel communication widget that includes live chat, callback, text messages, and email. Increase their satisfaction and your conversion rates.
Author: Bontact
Version: 1.2.0
Author URI: http://www.bontact.com
License: GPLv2 or later

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'BONTACT_BASE_FILE', __FILE__ );
define( 'BONTACT_BASE', plugin_basename( BONTACT_BASE_FILE ) );

include( 'classes/class-bont-settings.php' );
include( 'classes/class-bont-admin-ui.php' );
include( 'classes/class-bont-front-end.php' );


class BONT_Main {

	/**
	 * @var BONT_Settings
	 */
	public $settings;

	/**
	 * @var BONT_Admin_UI
	 */
	public $admin_ui;
	
	/**
	 * @var BONT_Front_End
	 */
	public $front_end;

	public function load_textdomain() {
		load_plugin_textdomain( 'bontact', false, basename( dirname( __FILE__ ) ) . '/language' );
	}
	
	public function __construct() {
		$this->settings = new BONT_Settings();
		$this->admin_ui = new BONT_Admin_UI();
		$this->front_end = new BONT_Front_End();
		
		add_action( 'plugins_loaded', array( &$this, 'load_textdomain' ) );
	}
	
}

global $bontact_main_class;
$bontact_main_class = new BONT_Main();
// EOF