<?php
# allow user override.
if (array_key_exists('lang', $_GET)) { $locale = $_GET["lang"]; }
if ($locale == "") { $locale = "en_US"; }
putenv("LANG=$locale");
putenv("LANGUAGE=$locale");
$locale_res = setlocale(LC_ALL, "");
$domain = "gnucash-htdocs";
if (! isset($text_dir)) { $text_dir = $top_dir; }
$dir_res = bindtextdomain($domain, $text_dir);

# Also specify that we want to receive the translated strings as UTF-8
bind_textdomain_codeset($domain, 'UTF-8');

textdomain($domain);
echo ("<!-- $locale , locale_res [$locale_res] , dir_res $dir_res -->\n");
?>
