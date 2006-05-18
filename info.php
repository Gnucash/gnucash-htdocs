<html>
<body>
<h1> info... </h1>
<?php

function list_system_locales(){
   ob_start();
   system('cat /etc/locale.gen');
   $str = ob_get_contents();
   ob_end_clean();
   return split("\\n", trim($str));
}

echo join('\n', list_system_locales());

?>
<hr />
<?
phpinfo();
?>
</body>
</html>
