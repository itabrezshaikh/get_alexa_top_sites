<?php

require_once __DIR__ . '/TopSites';
/**
 * Makes a request to ATS for the top 10 sites in a country
 */

if (count($argv) < 3) {
    echo "Usage: $argv[0] ACCESS_KEY_ID SECRET_ACCESS_KEY [COUNTRY_CODE] [FROM] [TO]\n";
    exit(-1);
}
else {
    $accessKeyId = $argv[1];
    $secretAccessKey = $argv[2];
    $countryCode = count($argv) > 3 ? $argv[3] : "";
    $from = count($argv) > 4 ? $argv[4] : "";
    $to = count($argv) > 5 ? $argv[5] : "";
}

$topSites = new TopSites($accessKeyId, $secretAccessKey, $countryCode);
$topSites->setTotalResults(100);#results per page
$topSites->setOutputFile(__DIR__ . '/topsites.txt');
for($i=$from; $i<$to;$i=$i+100){
    print "i(".($i+1).")\n";
    $topSites->setStart(($i+1));//total website count
    $topSites->getTopSites();
}

?>
