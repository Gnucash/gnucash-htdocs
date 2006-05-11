<html>
<body>
<h1> info... </h1>
<?php


function list_system_locales(){
   ob_start();
   system('locale -a');
   $str = ob_get_contents();
   ob_end_clean();
   return split("\\n", trim($str));
}

echo list_system_locales();

?>
<hr />
<?
phpinfo();
?>
</body>
</html>
