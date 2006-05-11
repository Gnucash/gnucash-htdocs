<?php
# allow user override.
$language = $_GET["lang"];
if (isset($language)) { $locale = $language; }
if ($locale == "") { $locale = "en_US"; }
putenv("LANG=$locale");
putenv("LANGUAGE=$locale");
setlocale(LC_ALL, $locale);
$domain = "gnucash-htdocs";
bindtextdomain($domain, $top_dir);
textdomain($domain);
?>
