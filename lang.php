<?php
$top_dir = ".";
$locale_dir = "locale";

if (!array_key_exists('HTTP_HOST', $_SERVER) || ($_SERVER["HTTP_HOST"] == "lists.gnucash.org"))
{
    $home = "http://www.gnucash.org";
}else{
    $home = $top_dir;
}

if ( !isset($locale) ) { $locale = ""; }
if ( !isset($lang_dir) ) { $lang_dir = $locale; }

# get the cookie setting
if (array_key_exists('lang_cookie', $_COOKIE)) {
    $locale = $_COOKIE['lang_cookie'];
    $lang_cookie = $locale;
}else{
    $lang_cookie = "";
}

# allow user override.
if (array_key_exists('lang', $_GET)) { $locale = $_GET["lang"]; }

# choose a default language based on the client browser's preferred
# language list
#echo ("<!-- top_dir: $top_dir, me: ".__FILE__."-->\n");


# key: locale, value: lang_dir
$supported_languages = array(
        'de_DE' => 'de', 'es_ES' => 'es', 'fr_FR' => 'fr',
        'hu_HU' => 'hu', 'it_IT' => 'it', 'ja_JP' => 'ja', 'nb_NO' => 'nb',
        'nl_NL' => 'nl', 'pl_PL' => 'pl', 'pt_PT' => 'pt_PT',
        'zh_CN' => 'zh_CN', 'zh_TW' => 'zh_TW', 'en_US' => 'en'
        );

# Find the full locale name for short language name.
if (strlen($locale) == 2) {
    foreach($supported_languages as $loc_lang => $loc_dir)
    {
        if ( (strtolower($locale) == strtolower($loc_dir))
            || (strtolower($locale) == substr($loc_lang, 0, 2 )) )
        {
            $locale = $loc_lang;
            break;
        }
    }
}

# Find the locale from Client Accept language
if ($locale == "") {
        # Get user prefered languages, and match agasint supported language
        if ( isset( $_SERVER["HTTP_ACCEPT_LANGUAGE"] ) )
        {
                # tolower() => remove space => '-' -> '_'
                # "fr-ch;q=0.3, en, zh-cn;q=0.7" => "fr_ch;q=0.3,en,zh_cn;q=0.7"
                $languages = str_replace('-','_', str_replace(' ', '', strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'])));
                $languages = explode(",", $languages);
                foreach ($languages as $item)
                {
                        # "zh_cn;q=0.7" => "zh_cn"
                        $lang = substr($item, 0, strcspn($item, ';'));
                        $lang_short = substr($lang, 0, 2);
                        # full match is prefer, but short match is acceptable.
                        foreach ($supported_languages as $loc_lang => $loc_dir)
                        {
                                if ($lang == strtolower($loc_lang)) { $locale = $loc_lang; break; }
                                if ($lang_short == substr($loc_lang, 0, 2 )) { $locale = $loc_lang; }
                        }
                        if ($locale != "") { break; }
                }
        }
        # nothing matched, use default language
        if ($locale == "") { $locale = "en_US"; }
}

$lang_dir = $supported_languages[$locale];
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
/*echo ("<!-- $locale , locale_res [$locale_res] , dir_res $dir_res, lang_cookie [$lang_cookie] -->\n");?>*/

