<?php

if (!defined('ABSPATH'))
    exit;

// Çalışma Zamanı ve Sürüm Sabitleri
if (!defined('HIZLI_KASA_BOOT_TIME')) {
    define('HIZLI_KASA_BOOT_TIME', microtime(true));
}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
define('HIZLI_KASA_VERSION', '12.53.0');
=======
// Sürüm Sabiti (Ana hizli-kasa.php başlığından otomatik okunur)
if (!defined('HIZLI_KASA_VERSION')) {
    preg_match('/Version:\s*([0-9\.]+)/i', (string)@file_get_contents(dirname(__DIR__) . '/hizli-kasa.php', false, null, 0, 500), $m);
    define('HIZLI_KASA_VERSION', $m[1] ?? '1.0.0');
}
>>>>>>> c7cb9b4 (refactor(constants): simplify HIZLI_KASA_VERSION reading using WP get_file_data API)
=======
define('HIZLI_KASA_VERSION', '12.53.0');
>>>>>>> bf724d3 (fix(core): restore .agents guidelines and reset constants.php to static version definition)
=======
define('HIZLI_KASA_VERSION', '12.54.0');
>>>>>>> d191479 (feat(stock): add zero-cost regular & sale price badges to admin stock management list, bump version to 12.54.0)
=======
define('HIZLI_KASA_VERSION', '12.54.1');
>>>>>>> 61ead93 (fix(print-manager): improve error guidance for re-pairing and bump version to 12.54.1)

// Harici İndirme ve Servis URL'leri
define('HIZLI_KASA_HELPER_DOWNLOAD_URL', 'https://github.com/Seyfullahkurt9/web-print-helper/releases/latest/download/web-print-helper.exe');
