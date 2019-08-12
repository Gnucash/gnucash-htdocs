<html>
<body>
<h1> info... </h1>
<?php

function list_system_locales(){
   ob_start();
   system('locale -a');
   $str = ob_get_contents();
   ob_end_clean();
   return trim($str);
}

?><pre><?
echo list_system_locales();
?>
</pre>
<hr />
<?php
phpinfo();
?>
</body>
</html>
