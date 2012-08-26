<?php

include_once "security.php";

if (!is_secure()) {
  die('Access Denied');
}

phpinfo();


