<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BONT_Front_End {
	
	public function wp_footer() {
		global $bontact_main_class;
		$token = $bontact_main_class->settings->get_option( 'token' );
		
		if ( empty( $token ) )
			return;
		
		?>
		<script type='text/javascript'>
			var bontactCustomer = '<?php echo $token; ?>';
			var locationRoot = (('https:' == document.location.protocol) ? 'https://' : 'http://');
			var newElem = document.createElement('script');
			newElem.setAttribute('src', locationRoot+'dashboard.bontact.com/widget/bontact.script.js');
			newElem.setAttribute('type', 'text/javascript');
			document.getElementsByTagName('head')[0].appendChild(newElem);
		</script>
	<?php
	}

	public function __construct() {		
		add_action( 'wp_footer', array( &$this, 'wp_footer' ), 80 );
	}
	
}