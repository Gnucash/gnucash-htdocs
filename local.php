<?php
echo ("<!-- LANG: $LANG, ENV_LANG: ".$_ENV['LANG']." , SCRIPT_NAME: ".$_SERVER['SCRIPT_NAME'].", PATH_INFO: ".$_SERVER['PATH_INFO']." -->\n");
echo ("<!-- top_dir: $top_dir, me: ".__FILE__."-->\n");
$top_dir = ".";
$home = $top_dir;
$locale = "";
?>
