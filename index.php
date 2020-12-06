<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("cd C:/Users/Sebastian/push");
  exec("/push/push.bat");
}
?>
<a href="?run=true">Push</a>