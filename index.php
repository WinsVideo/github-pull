<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/push/push.bat");
}
?>
<a href="?run=true">Push</a>