<?php
# allow user override.
$language = $_GET["lang"];
if(isset($language)) { $locale = $language; }
if($locale == "") { $locale = "en_US"; }
putenv("LANG=$locale");
setlocale(LC_MESSAGES, $locale);
$domain = "gnucash-htdocs";
bindtextdomain($domain, $top_dir);
textdomain($domain);
?>
