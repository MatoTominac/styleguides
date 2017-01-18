<?php

/** If no url parameter set */
if (isset($_GET["q"])) {
  $route = trim($_GET["q"], " \t\n\r\0\x0B\\/");
} else {
  $route = "";
}

/** Display default page with list of pages */
if (!$route) {
  echo $twig->render('system/homepage.twig');
}