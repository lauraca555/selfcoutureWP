<?php
/**
 * This template is used to display the login form with [edd_login]
 */
global $edd_login_redirect;
if ( ! is_user_logged_in() ) :
?><div id="container-identification"><?php
	// Show any error messages after form submission
    edd_print_errors(); ?><div id="container-login"><form id="edd_login_form" class="edd_form" action="" method="post">
            <fieldset>
                <legend>
                    <h2><?php _e('Log into Your Account','easy-digital-downloads');?></h2>
                </legend><?php do_action( 'edd_login_fields_before' );?><div class="edd-login-username"><label for="edd_user_login"><?php _e('Username or Email','easy-digital-downloads');?></label> <input name="edd_user_login" id="edd_user_login" class="edd-required edd-input" type="text"/></div><div class="edd-login-password"><label for="edd_user_pass"><?php _e('Password', 'easy-digital-downloads');?></label> <input name="edd_user_pass" id="edd_user_pass" class="edd-password edd-required edd-input" type="password"/></div><div class="edd-login-remember"><label> <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember Me', 'easy-digital-downloads' ); ?></label></div><div class="edd-login-submit"><input type="hidden" name="edd_redirect" value="<?php echo esc_url( $edd_login_redirect ); ?>"/><input type="hidden" name="edd_login_nonce" value="<?php echo wp_create_nonce( 'edd-login-nonce' ); ?>"/><input type="hidden" name="edd_action" value="user_login"/><input id="edd_login_submit" type="submit" class="edd-submit" value="<?php _e( 'Log In', 'easy-digital-downloads' ); ?>"/></div><div><a href="<?php echo wp_lostpassword_url(); ?>"><?php _e( 'Lost Password?', 'easy-digital-downloads' ); ?></a></div><?php do_action( 'edd_login_fields_after' ); ?></fieldset>
        </form></div>
            <?php else : ?>

	<?php do_action( 'edd_login_form_logged_in' ); ?>

<?php endif; ?>
<?php
/**
 * This template is used to display the registration form with [edd_register]
 */
global $edd_register_redirect;

do_action( 'edd_print_errors' ); ?>

<?php if ( ! is_user_logged_in() ) : ?>

<div id="container-register"><form id="edd_register_form" class="edd_form" action="" method="post"><!--
	--><?php do_action( 'edd_register_form_fields_top' ); ?><!--

	--><fieldset><!--
            --><legend><h2><?php _e( 'Register New Account', 'easy-digital-downloads' ); ?></h2></legend><!--

		--><?php do_action( 'edd_register_form_fields_before' ); ?><!--

		--><div><!--
			--><label for="edd-user-login"><?php _e( 'Username', 'easy-digital-downloads' ); ?></label><!--
			--> <input id="edd-user-login" class="required edd-input" type="text" name="edd_user_login" /><!--
		--></div><!--

		--><div><!--
			--><label for="edd-user-email"><?php _e( 'Email', 'easy-digital-downloads' ); ?></label><!--
			--> <input id="edd-user-email" class="required edd-input" type="email" name="edd_user_email" /><!--
		--></div><!--

		--><div><!--
			--><label for="edd-user-pass"><?php _e( 'Password', 'easy-digital-downloads' ); ?></label><!--
			--> <input id="edd-user-pass" class="password required edd-input" type="password" name="edd_user_pass" /><!--
		--></div><!--

		--><div><!--
			--><label for="edd-user-pass2"><?php _e( 'Confirm Password', 'easy-digital-downloads' ); ?></label><!--
			--> <input id="edd-user-pass2" class="password required edd-input" type="password" name="edd_user_pass2" /><!--
		--></div><!--


		--><?php do_action( 'edd_register_form_fields_before_submit' ); ?><!--

		--><div><!--
			--> <input type="hidden" name="edd_honeypot" value="" /><!--
			--> <input type="hidden" name="edd_action" value="user_register" /><!--
			--> <input type="hidden" name="edd_redirect" value="<?php echo esc_url( $edd_register_redirect ); ?>"/><!--
			--> <input class="edd-submit" name="edd_register_submit" type="submit" value="<?php esc_attr_e( 'Register', 'easy-digital-downloads' ); ?>" /><!--
		--></div><!--

		--><?php do_action( 'edd_register_form_fields_after' ); ?><!--
	--></fieldset>

	<?php do_action( 'edd_register_form_fields_bottom' ); ?>
    </form></div></div>

<?php else : ?>

	<?php do_action( 'edd_register_form_logged_in' ); ?>

<?php endif; ?>
