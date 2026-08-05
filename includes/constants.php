<?php

if (!defined('ABSPATH'))
    exit;

// Çalışma Zamanı ve Sürüm Sabitleri
if (!defined('HIZLI_KASA_BOOT_TIME')) {
    define('HIZLI_KASA_BOOT_TIME', microtime(true));
}

<<<<<<< HEAD
define('HIZLI_KASA_VERSION', '12.53.0');
=======
// Sürüm Sabiti (Ana hizli-kasa.php başlığından otomatik okunur)
if (!defined('HIZLI_KASA_VERSION')) {
    $hk_header = function_exists('get_file_data') ? get_file_data(dirname(__DIR__) . '/hizli-kasa.php', ['Version' => 'Version']) : [];
    define('HIZLI_KASA_VERSION', !empty($hk_header['Version']) ? $hk_header['Version'] : '12.53.0');
}
>>>>>>> c7cb9b4 (refactor(constants): simplify HIZLI_KASA_VERSION reading using WP get_file_data API)

// Harici İndirme ve Servis URL'leri
define('HIZLI_KASA_HELPER_DOWNLOAD_URL', 'https://github.com/Seyfullahkurt9/web-print-helper/releases/latest/download/web-print-helper.exe');
