<?php
# allow user override.
if (array_key_exists('lang', $_GET)) { $locale = $_GET["lang"]; }

# choose a default language based on the client browser's preferred
# language list

# key: locale, value: lang_dir
$supported_languages = array(
        'de_DE' => 'de', 'es_ES' => 'es', 'fr_FR' => 'fr',
        'it_IT' => 'it', 'ja_JP' => 'ja', 'nb_NO' => 'nb',
        'nl_NL' => 'nl', 'pl_PL' => 'pl', 'pt_PT' => 'pt_PT',
        'zh_CN' => 'zh_CN', 'en_US' => 'en'
        );

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
        $lang_dir = $supported_language[$locale];
}

# We should have a locale now, let's set up the required bits and pieces to show
# the website in that language.
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
