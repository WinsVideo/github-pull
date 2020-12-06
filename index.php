<?php
if ($_GET['run']) {
  exec("git pull");
}
?>
<a href="?run=true">Pull</a>