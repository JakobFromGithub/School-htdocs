<?php
  function myLog($ortNr, $ip) {
    file_put_contents("Files/F_92.log", $ortNr . ": IP: " . $ip ."\n", FILE_APPEND);
  }
?>
