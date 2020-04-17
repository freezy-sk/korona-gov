<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function download($url, $file)
{
    echo '<a href="' . $file . '" target="_blank">' . $file . '</a><br>';
    file_put_contents($file, file_get_contents($url));
}

foreach (array('sk', 'en', 'hu') as $lang) {
    download('https://mojeezdravie.nczisk.sk/api/v1/web/faq?lang=' . $lang, 'faq-' . $lang . '.json');
}

download('https://mojeezdravie.nczisk.sk/api/v1/ezdravie-stats-proxy-api.php', 'hp-stats.json');