<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BONT_Settings {

	/**
	 * @var array
	 */
	protected $_form_messages = array();
	protected $_form_messagesa = array();
	
	/**
	 * @var string
	 */
	protected $_option_slug;
	
	protected $_api_login_url = 'https://dashboard.bontact.com/api/bontactapi.aspx?func=login&username=%s&password=%s';
	protected $_api_login_urla = 'https://dashboard.bontact.com/api/bontactapi.aspx?func=signup&username=%s&password=%s&package=free&telephone=%s&usertype=4';
	protected function _do_redirect_option_page( $message_code = null ) {
		$return_url = add_query_arg( 'page', $this->_option_slug, admin_url( 'admin.php' ) );
		
		if ( ! is_null( $message_code ) )
			$return_url = add_query_arg( 'message', $message_code, $return_url );
		
		wp_redirect( $return_url );
		die();
	}
	
	protected function _do_redirect_option_pagea( $message_code = null ) {
		$return_url = add_query_arg( 'page', $this->_option_slug, admin_url( 'admin.php' ) );
		
		if ( ! is_null( $message_code ) )
			$return_url = add_query_arg( 'messagea', $message_code, $return_url );
		$return_url = add_query_arg( 'messageab', $msg, $return_url );
		wp_redirect( $return_url );
		die();
	}
	
	protected function _get_logout_link() {
		$url = add_query_arg( array( 'page' => $this->_option_slug, 'bont-action' => 'logout' ), admin_url( 'options-general.php' ) );
		return wp_nonce_url( $url, 'bontact_logout_' . get_current_user_id() );
	}
	
	public function admin_init() {
		
		        /* $options = get_option( $this->_option_slug, array() );
				$options['token'] = $data_return->token;
				$options['username'] = '';
				$options['password'] = '';
                update_option( $this->_option_slug, $options ); */
		        
				
		
		
		if ( ! current_user_can( 'manage_options' ) )
			return;

		if ( ! empty( $_REQUEST['bont-action'] ) ) {
			if ( 'logout' === $_REQUEST['bont-action'] ) {
				check_admin_referer( 'bontact_logout_' . get_current_user_id() );
				delete_option( $this->_option_slug );
				$this->_do_redirect_option_page( 5 );
			}

			if ( 'login' === $_REQUEST['bont-action'] ) {
				if ( empty( $_REQUEST['nonce'] ) || ! check_ajax_referer( 'bontact_' . $_REQUEST['bont-action'] . '_' . get_current_user_id(), 'nonce', false ) ) {
					$this->_do_redirect_option_page( 6 );
				}

				$response = wp_remote_get(urldecode( sprintf( $this->_api_login_url, $_POST['bontact']['username'], $_POST['bontact']['password'] )), array( 'sslverify' => false, 'timeout' => 30 ) );

				if ( is_wp_error( $response ) || 200 !== (int) $response['response']['code'] ) {
					$this->_do_redirect_option_page( 4 );
				}

				$data_return = json_decode( $response['body'] );
				if ( is_null( $data_return ) || '200' !== $data_return->code ) {
					
					$this->_do_redirect_option_page( 3 );
				}

				$options = get_option( $this->_option_slug, array() );
				$options['token'] = $data_return->token;
				$options['username'] = $_POST['bontact']['username'];
				$options['password'] = $_POST['bontact']['password'];

				update_option( $this->_option_slug, $options );
				
				$this->_do_redirect_option_page( 2 );
			}
			
			if ( 'loginup' === $_REQUEST['bont-action'] ) {
				

				$response = wp_remote_get( sprintf( $this->_api_login_urla, $_POST['emaila'], $_POST['passa'], $_POST['bontact']['tela'] ), array( 'sslverify' => false, 'timeout' => 30 ) );

				if ( is_wp_error( $response ) || 200 !== (int) $response['response']['code'] ) {
					$this->_do_redirect_option_pagea( 4 );
					
				}

				$data_return = json_decode( $response['body'] );
				if ( is_null( $data_return ) || TRUE !== $data_return->status ) {
					
					$this->_do_redirect_option_pagea( 3 );
				}

				$options = get_option( $this->_option_slug, array() );
				$options['token'] = $data_return->token;
				$options['username'] = $_POST['emaila'];
				$options['password'] = $_POST['passa'];

				update_option( $this->_option_slug, $options );
				
				$this->_do_redirect_option_pagea( 2 );
			}
		}
	}
	public function bontact_logout() {
	$options = get_option( $this->_option_slug, array() );
				$options['token'] = $data_return->token;
				$options['username'] = '';
				$options['password'] = '';
                update_option( $this->_option_slug, $options );	
				echo "You have disconnected your account";
	}
	public function bontact_setting_content() {
		$username = $this->get_option( 'username' );
		$password = $this->get_option( 'password' );
		
		?>
		<!-- Create a header in the default WordPress 'wrap' container -->
		<div class="wrap bontact-admin-wrap">
			<div id="icon-themes" class="icon32"></div>
			
			
			<?php if ( ! empty( $_GET['message'] ) && ! empty( $this->_form_messages[ $_GET['message'] ] ) ) : ?>
			<div class="<?php echo $this->_form_messages[ $_GET['message'] ]['status']; ?>"><p><?php echo $this->_form_messages[ $_GET['message'] ]['msg']; ?></p></div>
			
			<?php endif; ?>
			<?php if ( ! empty( $_GET['messagea'] ) && ! empty( $this->_form_messagesa[ $_GET['messagea'] ] ) ) : ?>
			<div class="<?php echo $this->_form_messages[ $_GET['messagea'] ]['status']; ?>"><p><?php echo $this->_form_messagesa[ $_GET['messagea'] ]['msg']; ?></p></div>
			
			<?php endif; ?>
			<?php if ( ! empty( $username ) && ! empty( $password ) ) : ?>
				<?php echo "<div id='bont-dasboard'><iframe id='bontiframe' src='https://dashboard.bontact.com/html/login.aspx?parent=wordpress&username=".$username."&pass=".$password."' height=1000 width=100% scrolling='yes'></iframe></div>"; ?>
			<?php else : ?>
			
			<script>
	jQuery(document).ready(function () {

    
	   
		jQuery("#contact-form").validate({
        rules: {
            emaila: {
                required: true,
                email: true
            },
            passa: {
                minlength: 6,
                required: true
            }
        },
        highlight: function (element) {
			            jQuery(element).closest('.form-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.text('OK!').addClass('valid')
                .closest('.form-group').removeClass('error').addClass('success');
        }
    });
		 
		
		jQuery("#linkup").click( function()
           {
			jQuery("#signin").show();
             jQuery("#signup").hide();
			
           }
						   );
						   
		  jQuery("#linkin").click( function()
           {
			jQuery("#signin").hide();
             jQuery("#signup").show();
			
           }
        );

});
		

	
	</script>
				
				<div id="signup" class="jumbotron col-md-8 ">
			<h3>
				You are just a few seconds away from engagement boost  ...
			</h3>
			<div class ="logo">
				<img calss="logo" src="http://bontact.com/wp-content/uploads/logo.png" alt="bontact">
			</div>
			
			
			<header >
<h4>Create New Account</h4><span class="switch-but"><b>Already registered?</b> <a id="linkup" href="#" class="signin">Sign in</a></span>
</header>
			<div style="display:inline; height:20px ">
				&nbsp; 
			</div>
			<div id="err" style="display: none" class="alert alert-danger" role="alert"></div>
		<form class="" action="" method="post" role="form" id="contact-form">
		<input type="hidden" name="page" value="<?php echo $this->_option_slug; ?>" />
					<input type="hidden" name="noncea" value="<?php echo wp_create_nonce( 'bontact_login_' . get_current_user_id() ); ?>" />
					<input type="hidden" name="bont-action" value="loginup" />
            <div class="form-group">
				 <div class="controls">
              <input type="text" name="emaila" id="emaila" placeholder="Enter your email" class="form-control">
				</div>
            </div>
            <div class="form-group">
              <input type="password" name="passa" id="passa" placeholder="Type a password" class="form-control">
            </div>
			<div class="form-group">
              <input type="text" name="tela" id="tela" placeholder="Enter your phone number" class="form-control">
            </div>
            <button type="submit" id="send" class="btn btn-success">SIGN UP</button>
          </form>
			</div>
		
		<div id="signin" style="display: none" class="jumbotron col-md-8 ">
		<div class ="logo">
				<img calss="logo" src="http://eldad.bontact.com/wp-content/uploads/logo.png" alt="bontact">
			</div>
			<header >
<h4>Sign In</h4><span class="switch-but"><b>Need an Account?</b> <a id = "linkin" href="#" class="signin">Register</a></span>
</header>
			<div style="display:inline; height:20px ">
				&nbsp; 
			</div>
			<div id="err" style="display: none" class="alert alert-danger" role="alert"></div>
			
		<form class="" action="" method="post" role="form" id="contact-form">
		<input type="hidden" name="page" value="<?php echo $this->_option_slug; ?>" />
					<input type="hidden" name="nonce" value="<?php echo wp_create_nonce( 'bontact_login_' . get_current_user_id() ); ?>" />
					<input type="hidden" name="bont-action" value="login" />
            <div class="form-group">
				 <div class="controls">
              <input type="text" name="bontact[username]" id="email" placeholder="Enter your email" class="form-control">
				</div>
            </div>
            <div class="form-group">
              <input type="password" name="bontact[password]" id="pass" placeholder="Type a password" class="form-control">
            </div>
			  <button type="submit" id="sendin" class="btn btn-success">SIGN IN</button>
          </form>
			</div>
				
				
			<?php endif; ?>
		</div><!-- /.wrap -->
	<?php
	}
	
	public function admin_menu() {
		$username = $this->get_option( 'username' );
		$password = $this->get_option( 'password' );
		add_menu_page( 'Bontact Settings', 'Bontact', 'manage_options', 'bontact-settings', array( &$this, 'bontact_setting_content' ), plugins_url( 'assets/images/logo-bontact-16x16.png', BONTACT_BASE ) );
		
	if (  empty( $username ) &&  empty( $password ) ) 
	{
		add_action('all_admin_notices', array(&$this, 'BontactNotice'));
	}
	if (  !empty( $username ) &&  !empty( $password ) ) 
	{
		add_submenu_page( 'bontact-settings', 'Disconnect account', 'Disconnect account', 'administrator', 'bontact-logout', array( &$this, 'bontact_logout' ) );
	}
	
	
	}
	
	public function get_option( $key ) {
		$options = get_option( $this->_option_slug );
		return isset( $options[ $key ] ) ? $options[ $key ] : '';
	}
	
	function BontactNotice()
			{
				echo "<div class='error'  style='color:#0000FF;background-color: #fff;height:30px;padding-top: 11px;padding-right: 15px; '><b>Bontact widget not active  </b><a href='edit.php?page=bontact-settings'> - Activate your account now</a> to start contacting your visitors</div>";
			}
			
	function head_code()
{

$output = '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>';    
$output .= '<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>'; 
$output .= '<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>';

echo $output;

}
	
	public function __construct() {
		$this->_form_messages = array(
			'', // Just skip from zero array.
			array(
				'msg' => __( 'Registration was successful.', 'bontact' ),
				'status' => 'updated',
			),
			array(
				'msg' => __( 'Login was successful.', 'bontact' ),
				'status' => 'updated',
			),
			array(
				'msg' => __( 'Invalid login.', 'bontact' ),
				'status' => 'error',
			),
			array(
				'msg' => __( 'Error with API server.', 'bontact' ),
				'status' => 'error',
			),
			array(
				'msg' => __( 'Your logout was successful.', 'bontact' ),
				'status' => 'updated',
			),
			array(
				'msg' => __( 'Action expired.', 'bontact' ),
				'status' => 'error',
			),
		);
		
		$this->_form_messagesa = array(
			'', // Just skip from zero array.
			array(
				'msg' => __( 'Registration was successful.', 'bontact' ),
				'status' => 'updated',
			),
			array(
				'msg' => __( 'Login was successful.', 'bontact' ),
				'status' => 'updated',
			),
			array(
				'msg' => __( 'This user already exists', 'bontact' ),
				'status' => 'error',
			),
			array(
				'msg' => __( 'Error with API server.', 'bontact' ),
				'status' => 'error',
			),
			array(
				'msg' => __( 'Your logout was successful.', 'bontact' ),
				'status' => 'updated',
			),
			array(
				'msg' => __( 'Action expired.', 'bontact' ),
				'status' => 'error',
			),
		);
		$this->_option_slug = 'bontact-settings';
		
		add_action( 'admin_init', array( &$this, 'admin_init' ) );
		add_action( 'admin_menu', array( &$this, 'admin_menu' ) );
		

		 
	}
	
}