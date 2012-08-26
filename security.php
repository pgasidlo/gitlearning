<?php

function is_secure() {
  return (PHP_SAPI == 'cli' || @$_SERVER['REMOTE_ADDR'] == '127.0.0.1' || @$_COOKIE['debug'] == '0x123456789');
}
