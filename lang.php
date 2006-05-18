<?php
# allow user override.
$language = $_GET["lang"];
if (isset($language)) { $locale = $language; }
if ($locale == "") { $locale = "en_US"; }
putenv("LANG=$locale");
putenv("LANGUAGE=$locale");
$locale_res = setlocale(LC_ALL, "");
$domain = "gnucash-htdocs";
$dir_res = bindtextdomain($domain, $top_dir);
textdomain($domain);
if (!$local_res) { $local_res = 'invalid'; }
echo ("<!-- $lang , locale_res [$locale_res] , dir_res $dir_res -->\n");
?>
