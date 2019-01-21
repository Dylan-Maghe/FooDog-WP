<?php
/*
Plugin Name: Social API plugin
Plugin URI: 
Description: Social API
Version: 0.1
Author: David Bouzouita
Author URI: https://github.com/bouzouitadavid
License: GPL2
*/

/*****************/
/* INSTAGRAM API */
/*****************/

function instagram_api() {
$curl = curl_init();
$token = get_option('insta_token');
echo $token;
$url = 'https://api.instagram.com/v1/users/self/?access_token='.$token.'';
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
));
//echo $url;
$resp = curl_exec($curl);
//var_dump($resp);
$result = json_decode($resp); ?>
<p>Vous avez <?= $result->data->counts->followed_by; ?> Followers</p>
<?php
// var_dump($resp);
curl_close($curl);
}
?>

<?php
/*****************/
/* PLUGIN POUR TOKEN */
/*****************/

// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {
	//create new top-level menu
	add_options_page('My Cool Plugin Settings', 'Social API Settings', 'administrator', 'my_cool_plugin_settings_page.php', 'my_cool_plugin_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
	//register our settings
	register_setting( 'my-cool-plugin-settings-group', 'new_option_name' );
	register_setting( 'my-cool-plugin-settings-group', 'insta_token' );
}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>Social API</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
    <input type="text" name="twitter_token" placeholder="twitter token" value="<?php echo esc_attr( get_option('twitter_token') ); ?>" />
    <input type="text" name="insta_token" placeholder="instagram token" value="<?php echo esc_attr( get_option('insta_token') ); ?>" />
    <input type="text" name="facebook_token" placeholder="facebook token" value="<?php echo esc_attr( get_option('facebook_token') ); ?>" />
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>