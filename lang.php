<?php
# allow user override.
$language = $_GET["lang"];
if (isset($language)) { $locale = $language; }
if ($locale == "") { $locale = "en_US"; }
putenv("LANG=$locale");
putenv("LANGUAGE=$locale");
$locale_res = setlocale(LC_ALL, "");
$domain = "gnucash-htdocs";
if (! isset($text_dir)) { $test_dir = $top_dir; }
$dir_res = bindtextdomain($domain, $text_dir);
textdomain($domain);
echo ("<!-- $lang , locale_res [$locale_res] , dir_res $dir_res -->\n");
?>
