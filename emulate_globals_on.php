<?php
 // Emulate register_globals on
 if (!ini_get('register_globals')) {
    $superglobals = array($_SERVER, $_ENV,
        $_FILES, $_COOKIE, $_POST, $_GET);
    if (isset($_SESSION)) {
        array_unshift($superglobals, $_SESSION);
    }
    foreach ($superglobals as $superglobal) {
        extract($superglobal, EXTR_SKIP);
    }
 }
$fullname = $_SERVER["PHP_SELF"];
$topdir= dirname($fullname)."/";
$toppath= getcwd()."/";
unset($fullname);
$topdir.="../";
$toppath.="../";
include($toppath."/accept-to-gettext.inc");
# test gettext support
# Set the language as 'en_GB' for testing
# note that gettext in php requires the entire
# string in one line, one quote.
$langs=array('nl_BE.ISO-8859-15','nl_BE.UTF-8','en_GB.UTF-8','en_GB','en_US.UTF-8', 'en_US');
$locale=al2gt($langs, 'text/html');
# if/when we support non-Latin-1 languages, add some logic to modify this line.
$mimeline = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-15\">\n";
# allow user override.
$language = $_GET["lang"];
if(isset($language)) { $locale = $language; }
if($locale == "") { $locale = 'en_US'; }
putenv("LANG=$locale");
setlocale(LC_MESSAGES, $locale);
$domain = "gnucash-htdocs";
bindtextdomain("$domain", "$toppath");
textdomain("$domain");
?>
