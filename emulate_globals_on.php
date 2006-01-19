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
?>
