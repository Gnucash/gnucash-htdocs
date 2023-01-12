<?php
$top_dir = ".";
$locale_dir = "locale";

# key: locale, value: lang_dir
$supported_languages = array(
    'ca_ES' => 'ca',
    'de_DE' => 'de',
    'en_US' => 'en',
    'es_ES' => 'es',
    'fr_FR' => 'fr',
    'he_IL' => 'he',
    'hr_HR' => 'hr',
    'hu_HU' => 'hu',
    'id_ID' => 'id',
    'it_IT' => 'it',
    'ja_JP' => 'ja',
    'nb_NO' => 'nb',
    'nl_NL' => 'nl',
    'pl_PL' => 'pl',
    'pt_PT' => 'pt',
    'zh_CN' => 'zh_CN',
    'zh_TW' => 'zh_TW'
);

if (!array_key_exists('HTTP_HOST', $_SERVER) || ($_SERVER["HTTP_HOST"] == "lists.gnucash.org"))
{
    $home = "https://www.gnucash.org";
}else{
    $home = $top_dir;
}

if ( !isset($locale) ) { $locale = ""; }
if ( !isset($lang_dir) ) { $lang_dir = $locale; }

# get the cookie setting
if (array_key_exists('lang_cookie', $_COOKIE)) {
    $locale = filter_input(INPUT_COOKIE, 'lang_cookie', FILTER_SANITIZE_STRING);
    $lang_cookie = $locale;
}else{
    $lang_cookie = "";
}

# allow user override.
$languages = filter_input(INPUT_GET, 'lang', FILTER_SANITIZE_STRING);

# choose a default language based on the client browser's preferred
# language list
#echo ("<!-- top_dir: $top_dir, me: ".__FILE__."-->\n");

# Find the locale from Client Accept language
# Get user preferred languages, and match against supported language
if ($languages == "" and isset( $_SERVER["HTTP_ACCEPT_LANGUAGE"] ) )
{
    # tolower() => remove space => '-' -> '_'
    $accept_language = filter_input(INPUT_SERVER, 'HTTP_ACCEPT_LANGUAGE', FILTER_SANITIZE_STRING);
    $languages = str_replace('-','_', str_replace(' ', '', strtolower($accept_language)));
}

$ranked_langs = [];
$languages = explode(",", $languages);
if (count($languages) > 1) {
    foreach ($languages as $item)
    {
        $parts = explode(";", $item);
        if ($parts) {
            if (!$parts[1]) {
                $ranked_langs[$parts[0]] = 1.0;
            } else {
                $ranked_langs[$parts[0]] = (float)substr($parts[1], 2);
            }
        }
    }
    arsort($ranked_langs, SORT_NUMERIC);
} else if ($languages[0] != "") {
    $ranked_langs[$languages[0]] = 1.0;
}

foreach (array_keys($ranked_langs) as $lang) {
    if ($ranked_langs[$lang] == 0) {
        break;
    }
    $lang_short = substr($lang, 0, 2);
    # full match is prefer, but short match is acceptable.
    foreach ($supported_languages as $loc_lang => $loc_dir)
    {
        if ($lang == strtolower($loc_lang)) { $locale = $loc_lang; break; }
        if ($lang_short == substr($loc_lang, 0, 2 )) { $locale = $loc_lang; }
    }
    if ($locale != "") { break; }
}
# nothing matched, use default language
if ($locale == "") { $locale = "en_US"; }

$lang_dir = array_key_exists($locale, $supported_languages) ?
            $supported_languages[$locale] : "en";
setcookie("lang_cookie", $locale);

# We should have a locale now, let's set up the required bits and pieces to show
# the website in that language.
require_once("externals/gettext.inc");
//putenv("LANG=$locale");
//putenv("LANGUAGE=$locale");
$locale_res = T_setlocale(LC_ALL, $locale);
$domain = "gnucash-htdocs";
if (! isset($text_dir)) { $text_dir = $locale_dir; }
$dir_res = T_bindtextdomain($domain, $text_dir);

# Also specify that we want to receive the translated strings as UTF-8
T_bind_textdomain_codeset($domain, 'UTF-8');

T_textdomain($domain);

# Next line was disabled in order to have the definition of doctype on the first line of the html resulting page. In this way the fixed attribute of the branding GnuCash sign works in ie8
/*echo ("<!-- $locale , locale_res [$locale_res] , dir_res $dir_res, lang_cookie [$lang_cookie] -->\n");*/
?>
