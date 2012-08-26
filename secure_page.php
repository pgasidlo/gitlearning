<?php

include_once "security.php";

if (is_secure()) {
  print "Secure Content. Do not copy!";
}

